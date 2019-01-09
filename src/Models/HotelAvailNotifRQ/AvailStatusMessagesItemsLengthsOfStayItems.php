<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelAvailNotifRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Items Schema
 */
class AvailStatusMessagesItemsLengthsOfStayItems extends ClassStructure
{
    /** @var string */
    public $minMaxMessageType = NULL;

    /** @var int */
    public $time = NULL;

    /** @var bool */
    public $arrivalDateBased = NULL;

    /**
     * @param string $minMaxMessageType
     * @param int $time
     * @param bool $arrivalDateBased
     */
    public function __construct($minMaxMessageType = NULL, $time = NULL, $arrivalDateBased = NULL)
    {
        $this->minMaxMessageType = $minMaxMessageType;
        $this->time = $time;
        $this->arrivalDateBased = $arrivalDateBased;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->minMaxMessageType = Schema::string();
        $properties->minMaxMessageType->title = "The Minmaxmessagetype Schema";
        $properties->minMaxMessageType->default = "";
        $properties->minMaxMessageType->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('MinMaxMessageType', self::names()->minMaxMessageType);
        $properties->time = Schema::integer();
        $properties->time->title = "The Time Schema";
        $properties->time->default = 0;
        $ownerSchema->addPropertyMapping('Time', self::names()->time);
        $properties->arrivalDateBased = Schema::boolean();
        $properties->arrivalDateBased->title = "The Arrivaldatebased Schema";
        $properties->arrivalDateBased->default = false;
        $ownerSchema->addPropertyMapping('ArrivalDateBased', self::names()->arrivalDateBased);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'MinMaxMessageType',
            1 => 'Time',
            2 => 'ArrivalDateBased',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMinMaxMessageType()
    {
        return $this->minMaxMessageType;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $minMaxMessageType
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMinMaxMessageType($minMaxMessageType = NULL)
    {
        $this->minMaxMessageType = $minMaxMessageType;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getTime()
    {
        return $this->time;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $time
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTime($time = NULL)
    {
        $this->time = $time;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getArrivalDateBased()
    {
        return $this->arrivalDateBased;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $arrivalDateBased
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setArrivalDateBased($arrivalDateBased = NULL)
    {
        $this->arrivalDateBased = $arrivalDateBased;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}