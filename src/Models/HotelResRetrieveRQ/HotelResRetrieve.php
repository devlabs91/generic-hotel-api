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
    /** @var ReadRequestsItems[]|array */
    public $readRequests = NULL;

    /**
     * @param ReadRequestsItems[]|array $readRequests
     */
    public function __construct($readRequests = NULL)
    {
        $this->readRequests = $readRequests;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->readRequests = Schema::arr();
        $properties->readRequests->items = ReadRequestsItems::schema();
        $properties->readRequests->title = "The Readrequests Schema";
        $ownerSchema->addPropertyMapping('ReadRequests', self::names()->readRequests);
        $ownerSchema->type = 'object';
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "The Root Schema";
        $ownerSchema->required = array(
            0 => 'ReadRequests',
        );
    }

    /**
     * @return ReadRequestsItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getReadRequests()
    {
        return $this->readRequests;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItems[]|array $readRequests
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReadRequests($readRequests = NULL)
    {
        $this->readRequests = $readRequests;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItems $ReadRequestsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addReadRequests(ReadRequestsItems $ReadRequestsItems)
    {
        if(!is_array($this->readRequests)) { $this->readRequests = []; }
        $this->readRequests[] = $ReadRequestsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return ReadRequestsItems|null
     * @codeCoverageIgnoreStart
     */
    public function getReadRequestsByKey($key)
    {
        if(is_array($this->readRequests) && key_exists($key, $this->readRequests) ) { return $this->readRequests[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param ReadRequestsItems $ReadRequestsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReadRequestsByKey($key, ReadRequestsItems $ReadRequestsItems)
    {
        if(!is_array($this->readRequests)) { $this->readRequests = []; }
        $this->readRequests[$key] = $ReadRequestsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}