<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Devlabs91\GenericHotelApi\Models\HotelRatePlanNotifRQ;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * The Items Schema
 */
class RateAmountMessagesItemsRestrictionStatusItems extends ClassStructure
{
    /** @var string */
    public $restriction = NULL;

    /** @var string */
    public $status = NULL;

    /**
     * @param string $restriction
     * @param string $status
     */
    public function __construct($restriction = NULL, $status = NULL)
    {
        $this->restriction = $restriction;
        $this->status = $status;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->restriction = Schema::string();
        $properties->restriction->title = "The Restriction Schema";
        $properties->restriction->default = "";
        $properties->restriction->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Restriction', self::names()->restriction);
        $properties->status = Schema::string();
        $properties->status->title = "The Status Schema";
        $properties->status->default = "";
        $properties->status->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Status', self::names()->status);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'Restriction',
            1 => 'Status',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRestriction()
    {
        return $this->restriction;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $restriction
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestriction($restriction = NULL)
    {
        $this->restriction = $restriction;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getStatus()
    {
        return $this->status;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $status
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStatus($status = NULL)
    {
        $this->status = $status;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}