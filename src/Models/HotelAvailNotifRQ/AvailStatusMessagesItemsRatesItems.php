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
class AvailStatusMessagesItemsRatesItems extends ClassStructure
{
    /** @var AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array */
    public $baseByGuestAmts = NULL;

    /** @var AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array */
    public $additionalGuestAmounts = NULL;

    /** @var AvailStatusMessagesItemsRatesItemsMealsIncluded */
    public $mealsIncluded = NULL;

    /**
     * @param AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array $baseByGuestAmts
     * @param AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array $additionalGuestAmounts
     * @param AvailStatusMessagesItemsRatesItemsMealsIncluded $mealsIncluded
     */
    public function __construct($baseByGuestAmts = NULL, $additionalGuestAmounts = NULL, $mealsIncluded = NULL)
    {
        $this->baseByGuestAmts = $baseByGuestAmts;
        $this->additionalGuestAmounts = $additionalGuestAmounts;
        $this->mealsIncluded = $mealsIncluded;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->baseByGuestAmts = Schema::arr();
        $properties->baseByGuestAmts->items = AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems::schema();
        $properties->baseByGuestAmts->title = "The Basebyguestamts Schema";
        $ownerSchema->addPropertyMapping('BaseByGuestAmts', self::names()->baseByGuestAmts);
        $properties->additionalGuestAmounts = Schema::arr();
        $properties->additionalGuestAmounts->items = AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems::schema();
        $properties->additionalGuestAmounts->title = "The Additionalguestamounts Schema";
        $ownerSchema->addPropertyMapping('AdditionalGuestAmounts', self::names()->additionalGuestAmounts);
        $properties->mealsIncluded = AvailStatusMessagesItemsRatesItemsMealsIncluded::schema();
        $ownerSchema->addPropertyMapping('MealsIncluded', self::names()->mealsIncluded);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'BaseByGuestAmts',
            1 => 'AdditionalGuestAmounts',
        );
    }

    /**
     * @return AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getBaseByGuestAmts()
    {
        return $this->baseByGuestAmts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems[]|array $baseByGuestAmts
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
     * @param AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addBaseByGuestAmts(AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems)
    {
        if(!is_array($this->baseByGuestAmts)) { $this->baseByGuestAmts = []; }
        $this->baseByGuestAmts[] = $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems|null
     * @codeCoverageIgnoreStart
     */
    public function getBaseByGuestAmtsByKey($key)
    {
        if(is_array($this->baseByGuestAmts) && key_exists($key, $this->baseByGuestAmts) ) { return $this->baseByGuestAmts[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBaseByGuestAmtsByKey($key, AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems)
    {
        if(!is_array($this->baseByGuestAmts)) { $this->baseByGuestAmts = []; }
        $this->baseByGuestAmts[$key] = $AvailStatusMessagesItemsRatesItemsBaseByGuestAmtsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems[]|array $additionalGuestAmounts
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
     * @param AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addAdditionalGuestAmounts(AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems)
    {
        if(!is_array($this->additionalGuestAmounts)) { $this->additionalGuestAmounts = []; }
        $this->additionalGuestAmounts[] = $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems|null
     * @codeCoverageIgnoreStart
     */
    public function getAdditionalGuestAmountsByKey($key)
    {
        if(is_array($this->additionalGuestAmounts) && key_exists($key, $this->additionalGuestAmounts) ) { return $this->additionalGuestAmounts[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdditionalGuestAmountsByKey($key, AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems)
    {
        if(!is_array($this->additionalGuestAmounts)) { $this->additionalGuestAmounts = []; }
        $this->additionalGuestAmounts[$key] = $AvailStatusMessagesItemsRatesItemsAdditionalGuestAmountsItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsRatesItemsMealsIncluded
     * @codeCoverageIgnoreStart
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param AvailStatusMessagesItemsRatesItemsMealsIncluded $mealsIncluded
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMealsIncluded(AvailStatusMessagesItemsRatesItemsMealsIncluded $mealsIncluded = NULL)
    {
        $this->mealsIncluded = $mealsIncluded;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}