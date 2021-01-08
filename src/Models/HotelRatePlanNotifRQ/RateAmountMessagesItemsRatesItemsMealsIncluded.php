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
 * The Statusapplicationcontrol Schema
 */
class RateAmountMessagesItemsRatesItemsMealsIncluded extends ClassStructure
{
    /** @var string */
    public $breakfast = NULL;

    /** @var string */
    public $numberOfBreakfast = NULL;

    /**
     * @param string $breakfast
     * @param string $numberOfBreakfast
     */
    public function __construct($breakfast = NULL, $numberOfBreakfast = NULL)
    {
        $this->breakfast = $breakfast;
        $this->numberOfBreakfast = $numberOfBreakfast;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->breakfast = Schema::string();
        $properties->breakfast->title = "The Breakfast Schema";
        $properties->breakfast->default = "";
        $properties->breakfast->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('Breakfast', self::names()->breakfast);
        $properties->numberOfBreakfast = Schema::string();
        $properties->numberOfBreakfast->title = "The Rateplancode Schema";
        $properties->numberOfBreakfast->default = "";
        $properties->numberOfBreakfast->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('NumberOfBreakfast', self::names()->numberOfBreakfast);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The MealsIncluded Schema";
        $ownerSchema->required = array(
            0 => 'Breakfast',
            1 => 'NumberOfBreakfast',
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getBreakfast()
    {
        return $this->breakfast;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $breakfast
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBreakfast($breakfast = NULL)
    {
        $this->breakfast = $breakfast;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getNumberOfBreakfast()
    {
        return $this->numberOfBreakfast;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $numberOfBreakfast
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNumberOfBreakfast($numberOfBreakfast = NULL)
    {
        $this->numberOfBreakfast = $numberOfBreakfast;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}