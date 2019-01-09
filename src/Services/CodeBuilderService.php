<?php 

namespace Devlabs91\GenericHotelApi\Services;

class CodeBuilderService {
    
    public static function create() {
        
        $schemas = [ 
            'HotelAvailNotifRQ.json' => [ 'HotelAvailNotifRQ', 'HotelAvailNotif' ],
            'HotelRatePlanNotifRQ.json' => [ 'HotelRatePlanNotifRQ', 'HotelRatePlanNotif' ],
        ];
        
        foreach( $schemas AS $schemaFileName => $params ) {
            self::build( $schemaFileName, $params );
        }
        
    }

    public static function build( $schemaFileName, $params ) {
        $schemaData = json_decode(file_get_contents( __DIR__."/../Schemas/".$schemaFileName ));
        
        $swaggerSchema = \Swaggest\JsonSchema\Schema::import($schemaData);
        
        $appPath = realpath(__DIR__ . '/../Models') . '/' . $params[0];
        $appNs = 'Devlabs91\\GenericHotelApi\\Models\\' . $params[0];
        
        $app = new \Swaggest\PhpCodeBuilder\App\PhpApp();
        $app->setNamespaceRoot($appNs, '.');
        
        $builder = new \Swaggest\PhpCodeBuilder\JsonSchema\PhpBuilder();
        $builder->buildConstructors = true;
        $builder->buildToArray = true;
        $builder->buildArrayAdders = true;
        $builder->buildGetters = true;
        $builder->buildSetters = true;
        $builder->makeEnumConstants = true;
        
        $builder->classCreatedHook = new \Swaggest\PhpCodeBuilder\JsonSchema\ClassHookCallback(
            function (\Swaggest\PhpCodeBuilder\PhpClass $class, $path, $schema) use ($app, $appNs, $params) {
                $desc = '';
                if ($schema->title) {
                    $desc = $schema->title;
                }
                if ($schema->description) {
                    $desc .= "\n" . $schema->description;
                }
                if ($fromRefs = $schema->getFromRefs()) {
                    $desc .= "\nBuilt from " . implode("\n" . ' <- ', $fromRefs);
                }
                
                $class->setDescription(trim($desc));
                
                $class->setNamespace($appNs);
                if ('#' === $path) {
                    $class->setName($params[1]); // Class name for root schema
                } elseif (strpos($path, '#/definitions/') === 0) {
                    $class->setName(\Swaggest\PhpCodeBuilder\PhpCode::makePhpClassName(
                        substr($path, strlen('#/definitions/'))));
                }
                $app->addClass($class);
            }
            );
        
        $builder->getType($swaggerSchema);
        $app->clearOldFiles($appPath);
        $app->store($appPath);
    }
    
}