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
 * The Items Schema
 */
class ReadRequestsItems extends ClassStructure
{
    /** @var ReadRequestsItemsHotelReadRequestItems[]|array */
    public $hotelReadRequest = NULL;

    /**
     * @param ReadRequestsItemsHotelReadRequestItems[]|array $hotelReadRequest
     */
    public function __construct($hotelReadRequest = NULL)
    {
        $this->hotelReadRequest = $hotelReadRequest;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hotelReadRequest = Schema::arr();
        $properties->hotelReadRequest->items = ReadRequestsItemsHotelReadRequestItems::schema();
        $properties->hotelReadRequest->title = "The Hotelreadrequest Schema";
        $ownerSchema->addPropertyMapping('HotelReadRequest', self::names()->hotelReadRequest);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'HotelReadRequest',
        );
    }

    /**
     * @return ReadRequestsItemsHotelReadRequestItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getHotelReadRequest()
    {
        return $this->hotelReadRequest;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItemsHotelReadRequestItems[]|array $hotelReadRequest
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHotelReadRequest($hotelReadRequest = NULL)
    {
        $this->hotelReadRequest = $hotelReadRequest;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItemsHotelReadRequestItems $ReadRequestsItemsHotelReadRequestItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addHotelReadRequest(ReadRequestsItemsHotelReadRequestItems $ReadRequestsItemsHotelReadRequestItems)
    {
        if(!is_array($this->hotelReadRequest)) { $this->hotelReadRequest = []; }
        $this->hotelReadRequest[] = $ReadRequestsItemsHotelReadRequestItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return ReadRequestsItemsHotelReadRequestItems|null
     * @codeCoverageIgnoreStart
     */
    public function getHotelReadRequestByKey($key)
    {
        if(is_array($this->hotelReadRequest) && key_exists($key, $this->hotelReadRequest) ) { return $this->hotelReadRequest[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param ReadRequestsItemsHotelReadRequestItems $ReadRequestsItemsHotelReadRequestItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHotelReadRequestByKey($key, ReadRequestsItemsHotelReadRequestItems $ReadRequestsItemsHotelReadRequestItems)
    {
        if(!is_array($this->hotelReadRequest)) { $this->hotelReadRequest = []; }
        $this->hotelReadRequest[$key] = $ReadRequestsItemsHotelReadRequestItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}