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
class RateAmountMessagesItems extends ClassStructure
{
    /** @var RateAmountMessagesItemsStatusApplicationControl */
    public $statusApplicationControl = NULL;

    /** @var RateAmountMessagesItemsRatesItems[]|array */
    public $rates = NULL;

    /**
     * @param RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl
     * @param RateAmountMessagesItemsRatesItems[]|array $rates
     */
    public function __construct(RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl = NULL, $rates = NULL)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        $this->rates = $rates;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->statusApplicationControl = RateAmountMessagesItemsStatusApplicationControl::schema();
        $ownerSchema->addPropertyMapping('StatusApplicationControl', self::names()->statusApplicationControl);
        $properties->rates = Schema::arr();
        $properties->rates->items = RateAmountMessagesItemsRatesItems::schema();
        $properties->rates->title = "The Rates Schema";
        $ownerSchema->addPropertyMapping('Rates', self::names()->rates);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'StatusApplicationControl',
            1 => 'Rates',
        );
    }

    /**
     * @return RateAmountMessagesItemsStatusApplicationControl
     * @codeCoverageIgnoreStart
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStatusApplicationControl(RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl = NULL)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return RateAmountMessagesItemsRatesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRates()
    {
        return $this->rates;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItems[]|array $rates
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRates($rates = NULL)
    {
        $this->rates = $rates;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItems $RateAmountMessagesItemsRatesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRates(RateAmountMessagesItemsRatesItems $RateAmountMessagesItemsRatesItems)
    {
        if(!is_array($this->rates)) { $this->rates = []; }
        $this->rates[] = $RateAmountMessagesItemsRatesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}