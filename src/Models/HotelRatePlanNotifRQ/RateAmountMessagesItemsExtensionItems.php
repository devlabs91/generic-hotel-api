<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelRatePlanNotifRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Items Schema
 */
class RateAmountMessagesItemsExtensionItems extends ClassStructure
{
    /** @var string */
    public $type = NULL;

    /** @var string */
    public $value = NULL;

    /**
     * @param string $type
     * @param string $value
     */
    public function __construct($type = NULL, $value = NULL)
    {
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->type = Schema::string();
        $properties->type->title = "The Type Schema";
        $properties->type->default = "";
        $properties->type->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Type', self::names()->type);
        $properties->value = Schema::string();
        $properties->value->title = "The Value Schema";
        $properties->value->default = "";
        $properties->value->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Value', self::names()->value);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'Type',
            1 => 'Value',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getType()
    {
        return $this->type;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $type
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type = NULL)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getValue()
    {
        return $this->value;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $value
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setValue($value = NULL)
    {
        $this->value = $value;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}