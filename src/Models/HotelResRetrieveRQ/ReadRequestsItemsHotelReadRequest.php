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
 * The Hotelreadrequest Schema
 */
class ReadRequestsItemsHotelReadRequest extends ClassStructure
{
    /** @var string */
    public $hotelCode = NULL;

    /** @var ReadRequestsItemsHotelReadRequestSelectionCriteria */
    public $selectionCriteria = NULL;

    /**
     * @param string $hotelCode
     * @param ReadRequestsItemsHotelReadRequestSelectionCriteria $selectionCriteria
     */
    public function __construct($hotelCode = NULL, ReadRequestsItemsHotelReadRequestSelectionCriteria $selectionCriteria = NULL)
    {
        $this->hotelCode = $hotelCode;
        $this->selectionCriteria = $selectionCriteria;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hotelCode = Schema::string();
        $properties->hotelCode->title = "The Hotelcode Schema";
        $properties->hotelCode->default = "";
        $properties->hotelCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('HotelCode', self::names()->hotelCode);
        $properties->selectionCriteria = ReadRequestsItemsHotelReadRequestSelectionCriteria::schema();
        $ownerSchema->addPropertyMapping('SelectionCriteria', self::names()->selectionCriteria);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Hotelreadrequest Schema";
        $ownerSchema->required = array(
            0 => 'SelectionCriteria',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $hotelCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHotelCode($hotelCode = NULL)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ReadRequestsItemsHotelReadRequestSelectionCriteria
     * @codeCoverageIgnoreStart
     */
    public function getSelectionCriteria()
    {
        return $this->selectionCriteria;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItemsHotelReadRequestSelectionCriteria $selectionCriteria
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSelectionCriteria(ReadRequestsItemsHotelReadRequestSelectionCriteria $selectionCriteria = NULL)
    {
        $this->selectionCriteria = $selectionCriteria;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}