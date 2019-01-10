<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelRatePlanInventoryRetrieveRS;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Root Schema
 */
class HotelRatePlanInventoryRetrieve extends ClassStructure
{
    /** @var RatePlansItems[]|array */
    public $ratePlans = NULL;

    /**
     * @param RatePlansItems[]|array $ratePlans
     */
    public function __construct($ratePlans = NULL)
    {
        $this->ratePlans = $ratePlans;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->ratePlans = Schema::arr();
        $properties->ratePlans->items = RatePlansItems::schema();
        $properties->ratePlans->title = "The Rateplans Schema";
        $ownerSchema->addPropertyMapping('RatePlans', self::names()->ratePlans);
        $ownerSchema->type = 'object';
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "The Root Schema";
        $ownerSchema->required = array(
            0 => 'RatePlans',
        );
    }

    /**
     * @return RatePlansItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RatePlansItems[]|array $ratePlans
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatePlans($ratePlans = NULL)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RatePlansItems $RatePlansItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRatePlans(RatePlansItems $RatePlansItems)
    {
        if(!is_array($this->ratePlans)) { $this->ratePlans = []; }
        $this->ratePlans[] = $RatePlansItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return RatePlansItems|null
     * @codeCoverageIgnoreStart
     */
    public function getRatePlansByKey($key)
    {
        if(is_array($this->ratePlans) && key_exists($key, $this->ratePlans) ) { return $this->ratePlans[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param RatePlansItems $RatePlansItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatePlansByKey($key, RatePlansItems $RatePlansItems)
    {
        if(!is_array($this->ratePlans)) { $this->ratePlans = []; }
        $this->ratePlans[$key] = $RatePlansItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}