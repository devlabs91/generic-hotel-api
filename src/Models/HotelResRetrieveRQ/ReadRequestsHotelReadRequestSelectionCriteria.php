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
 * The Selectioncriteria Schema
 */
class ReadRequestsHotelReadRequestSelectionCriteria extends ClassStructure
{
    /** @var string */
    public $start = NULL;

    /** @var string */
    public $end = NULL;

    /** @var string */
    public $dateType = NULL;

    /**
     * @param string $start
     * @param string $end
     * @param string $dateType
     */
    public function __construct($start = NULL, $end = NULL, $dateType = NULL)
    {
        $this->start = $start;
        $this->end = $end;
        $this->dateType = $dateType;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
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
        $properties->dateType = Schema::string();
        $properties->dateType->title = "The Datetype Schema";
        $properties->dateType->default = "";
        $properties->dateType->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('DateType', self::names()->dateType);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Selectioncriteria Schema";
        $ownerSchema->required = array(
            0 => 'Start',
            1 => 'End',
            2 => 'DateType',
        );
    }

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

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDateType()
    {
        return $this->dateType;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $dateType
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDateType($dateType = NULL)
    {
        $this->dateType = $dateType;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}