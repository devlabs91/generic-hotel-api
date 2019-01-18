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
class ReadRequestsItemsHotelReadRequestItems extends ClassStructure
{
    /** @var string */
    public $hotelCode = NULL;

    /** @var ReadRequestsItemsHotelReadRequestItemsSelectionCriteria */
    public $selectionCriteria = NULL;

    /**
     * @param string $hotelCode
     * @param ReadRequestsItemsHotelReadRequestItemsSelectionCriteria $selectionCriteria
     */
    public function __construct($hotelCode = NULL, ReadRequestsItemsHotelReadRequestItemsSelectionCriteria $selectionCriteria = NULL)
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
        $properties->selectionCriteria = ReadRequestsItemsHotelReadRequestItemsSelectionCriteria::schema();
        $ownerSchema->addPropertyMapping('SelectionCriteria', self::names()->selectionCriteria);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
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
     * @return ReadRequestsItemsHotelReadRequestItemsSelectionCriteria
     * @codeCoverageIgnoreStart
     */
    public function getSelectionCriteria()
    {
        return $this->selectionCriteria;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ReadRequestsItemsHotelReadRequestItemsSelectionCriteria $selectionCriteria
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSelectionCriteria(ReadRequestsItemsHotelReadRequestItemsSelectionCriteria $selectionCriteria = NULL)
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