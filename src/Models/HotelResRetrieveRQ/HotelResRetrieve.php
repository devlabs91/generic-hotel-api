<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelResRetrieveRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Root Schema
 */
class HotelResRetrieve extends ClassStructure
{
    /** @var ReadRequests */
    public $readRequests = NULL;

    /**
     * @param ReadRequests $readRequests
     */
    public function __construct(ReadRequests $readRequests = NULL)
    {
        $this->readRequests = $readRequests;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->readRequests = ReadRequests::schema();
        $ownerSchema->addPropertyMapping('ReadRequests', self::names()->readRequests);
        $ownerSchema->type = 'object';
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "The Root Schema";
        $ownerSchema->required = array(
            0 => 'ReadRequests',
        );
    }

    /**
     * @return ReadRequests
     * @codeCoverageIgnoreStart
     */
    public function getReadRequests()
    {
        return $this->readRequests;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequests $readRequests
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReadRequests(ReadRequests $readRequests = NULL)
    {
        $this->readRequests = $readRequests;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}