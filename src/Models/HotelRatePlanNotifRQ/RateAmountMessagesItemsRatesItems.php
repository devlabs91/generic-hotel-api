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
class RateAmountMessagesItemsRatesItems extends ClassStructure
{
    /** @var RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array */
    public $baseByGuestAmts = NULL;

    /** @var RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array */
    public $additionalGuestAmounts = NULL;

    /**
     * @param RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array $baseByGuestAmts
     * @param RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array $additionalGuestAmounts
     */
    public function __construct($baseByGuestAmts = NULL, $additionalGuestAmounts = NULL)
    {
        $this->baseByGuestAmts = $baseByGuestAmts;
        $this->additionalGuestAmounts = $additionalGuestAmounts;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->baseByGuestAmts = Schema::arr();
        $properties->baseByGuestAmts->items = RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems::schema();
        $properties->baseByGuestAmts->title = "The Basebyguestamts Schema";
        $ownerSchema->addPropertyMapping('BaseByGuestAmts', self::names()->baseByGuestAmts);
        $properties->additionalGuestAmounts = Schema::arr();
        $properties->additionalGuestAmounts->items = RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems::schema();
        $properties->additionalGuestAmounts->title = "The Additionalguestamounts Schema";
        $ownerSchema->addPropertyMapping('AdditionalGuestAmounts', self::names()->additionalGuestAmounts);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'BaseByGuestAmts',
            1 => 'AdditionalGuestAmounts',
        );
    }

    /**
     * @return RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getBaseByGuestAmts()
    {
        return $this->baseByGuestAmts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array $baseByGuestAmts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBaseByGuestAmts($baseByGuestAmts = NULL)
    {
        $this->baseByGuestAmts = $baseByGuestAmts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems $RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addBaseByGuestAmts(RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems $RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems)
    {
        if(!is_array($this->baseByGuestAmts)) { $this->baseByGuestAmts = []; }
        $this->baseByGuestAmts[] = $RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array $additionalGuestAmounts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdditionalGuestAmounts($additionalGuestAmounts = NULL)
    {
        $this->additionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems $RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addAdditionalGuestAmounts(RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems $RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems)
    {
        if(!is_array($this->additionalGuestAmounts)) { $this->additionalGuestAmounts = []; }
        $this->additionalGuestAmounts[] = $RateAmountMessagesItemsRatesItemsAdditionalGuestAmountsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}