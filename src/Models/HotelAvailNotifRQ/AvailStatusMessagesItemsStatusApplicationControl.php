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
 * The Statusapplicationcontrol Schema
 */
class AvailStatusMessagesItemsStatusApplicationControl extends ClassStructure
{
    /** @var string */
    public $invTypeCode = NULL;

    /** @var string */
    public $ratePlanCode = NULL;

    /** @var string */
    public $start = NULL;

    /** @var string */
    public $end = NULL;

    /**
     * @param string $invTypeCode
     * @param string $ratePlanCode
     * @param string $start
     * @param string $end
     */
    public function __construct($invTypeCode = NULL, $ratePlanCode = NULL, $start = NULL, $end = NULL)
    {
        $this->invTypeCode = $invTypeCode;
        $this->ratePlanCode = $ratePlanCode;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->invTypeCode = Schema::string();
        $properties->invTypeCode->title = "The Invtypecode Schema";
        $properties->invTypeCode->default = "";
        $properties->invTypeCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('InvTypeCode', self::names()->invTypeCode);
        $properties->ratePlanCode = Schema::string();
        $properties->ratePlanCode->title = "The Rateplancode Schema";
        $properties->ratePlanCode->default = "";
        $properties->ratePlanCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('RatePlanCode', self::names()->ratePlanCode);
        $properties->start = Schema::string();
        $properties->start->title = "The Start Schema";
        $properties->start->default = "";
        $properties->start->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Start', self::names()->start);
        $properties->end = Schema::string();
        $properties->end->title = "The End Schema";
        $properties->end->default = "";
        $properties->end->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('End', self::names()->end);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Statusapplicationcontrol Schema";
        $ownerSchema->required = array(
            0 => 'InvTypeCode',
            1 => 'RatePlanCode',
            2 => 'Start',
            3 => 'End',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getInvTypeCode()
    {
        return $this->invTypeCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $invTypeCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInvTypeCode($invTypeCode = NULL)
    {
        $this->invTypeCode = $invTypeCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

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
    public function getStart()
    {
        return $this->start;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $start
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStart($start = NULL)
    {
        $this->start = $start;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getEnd()
    {
        return $this->end;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $end
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnd($end = NULL)
    {
        $this->end = $end;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}