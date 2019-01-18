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
    /** @var ReadRequestsItemsHotelReadRequest */
    public $hotelReadRequest = NULL;

    /**
     * @param ReadRequestsItemsHotelReadRequest $hotelReadRequest
     */
    public function __construct(ReadRequestsItemsHotelReadRequest $hotelReadRequest = NULL)
    {
        $this->hotelReadRequest = $hotelReadRequest;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hotelReadRequest = ReadRequestsItemsHotelReadRequest::schema();
        $ownerSchema->addPropertyMapping('HotelReadRequest', self::names()->hotelReadRequest);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'HotelReadRequest',
        );
    }

    /**
     * @return ReadRequestsItemsHotelReadRequest
     * @codeCoverageIgnoreStart
     */
    public function getHotelReadRequest()
    {
        return $this->hotelReadRequest;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItemsHotelReadRequest $hotelReadRequest
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHotelReadRequest(ReadRequestsItemsHotelReadRequest $hotelReadRequest = NULL)
    {
        $this->hotelReadRequest = $hotelReadRequest;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}