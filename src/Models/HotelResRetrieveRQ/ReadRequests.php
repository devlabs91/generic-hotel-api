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
 * The Readrequests Schema
 */
class ReadRequests extends ClassStructure
{
    /** @var ReadRequestsHotelReadRequest */
    public $hotelReadRequest = NULL;

    /**
     * @param ReadRequestsHotelReadRequest $hotelReadRequest
     */
    public function __construct(ReadRequestsHotelReadRequest $hotelReadRequest = NULL)
    {
        $this->hotelReadRequest = $hotelReadRequest;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hotelReadRequest = ReadRequestsHotelReadRequest::schema();
        $ownerSchema->addPropertyMapping('HotelReadRequest', self::names()->hotelReadRequest);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Readrequests Schema";
        $ownerSchema->required = array(
            0 => 'HotelReadRequest',
        );
    }

    /**
     * @return ReadRequestsHotelReadRequest
     * @codeCoverageIgnoreStart
     */
    public function getHotelReadRequest()
    {
        return $this->hotelReadRequest;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsHotelReadRequest $hotelReadRequest
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHotelReadRequest(ReadRequestsHotelReadRequest $hotelReadRequest = NULL)
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