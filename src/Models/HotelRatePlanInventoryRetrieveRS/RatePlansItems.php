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
 * The Items Schema
 */
class RatePlansItems extends ClassStructure
{
    /** @var string */
    public $ratePlanCode = NULL;

    /** @var string */
    public $ratePlanName = NULL;

    /** @var RatePlansItemsRoomTypesItems[]|array */
    public $roomTypes = NULL;

    /**
     * @param string $ratePlanCode
     * @param string $ratePlanName
     * @param RatePlansItemsRoomTypesItems[]|array $roomTypes
     */
    public function __construct($ratePlanCode = NULL, $ratePlanName = NULL, $roomTypes = NULL)
    {
        $this->ratePlanCode = $ratePlanCode;
        $this->ratePlanName = $ratePlanName;
        $this->roomTypes = $roomTypes;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->ratePlanCode = Schema::string();
        $properties->ratePlanCode->title = "The Rateplancode Schema";
        $properties->ratePlanCode->default = "";
        $properties->ratePlanCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('RatePlanCode', self::names()->ratePlanCode);
        $properties->ratePlanName = Schema::string();
        $properties->ratePlanName->title = "The Rateplanname Schema";
        $properties->ratePlanName->default = "";
        $properties->ratePlanName->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('RatePlanName', self::names()->ratePlanName);
        $properties->roomTypes = Schema::arr();
        $properties->roomTypes->items = RatePlansItemsRoomTypesItems::schema();
        $properties->roomTypes->title = "The Roomtypes Schema";
        $ownerSchema->addPropertyMapping('RoomTypes', self::names()->roomTypes);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'RatePlanCode',
            1 => 'RatePlanName',
            2 => 'RoomTypes',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $ratePlanCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatePlanCode($ratePlanCode = NULL)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $ratePlanName
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatePlanName($ratePlanName = NULL)
    {
        $this->ratePlanName = $ratePlanName;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return RatePlansItemsRoomTypesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RatePlansItemsRoomTypesItems[]|array $roomTypes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRoomTypes($roomTypes = NULL)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RatePlansItemsRoomTypesItems $RatePlansItemsRoomTypesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRoomTypes(RatePlansItemsRoomTypesItems $RatePlansItemsRoomTypesItems)
    {
        if(!is_array($this->roomTypes)) { $this->roomTypes = []; }
        $this->roomTypes[] = $RatePlansItemsRoomTypesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return RatePlansItemsRoomTypesItems|null
     * @codeCoverageIgnoreStart
     */
    public function getRoomTypesByKey($key)
    {
        if(is_array($this->roomTypes) && key_exists($key, $this->roomTypes) ) { return $this->roomTypes[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param RatePlansItemsRoomTypesItems $RatePlansItemsRoomTypesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRoomTypesByKey($key, RatePlansItemsRoomTypesItems $RatePlansItemsRoomTypesItems)
    {
        if(!is_array($this->roomTypes)) { $this->roomTypes = []; }
        $this->roomTypes[$key] = $RatePlansItemsRoomTypesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}