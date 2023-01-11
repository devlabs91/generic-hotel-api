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

    /** @var RateAmountMessagesItemsRestrictionStatusItems[]|array */
    public $restrictionStatus = NULL;
    
    /** @var RateAmountMessagesItemsLengthsOfStayItems[]|array */
    public $lengthsOfStay = NULL;
    
    /** @var RateAmountMessagesItemsAdvancedBookingOffsetItems[]|array */
    public $advancedBookingOffset = NULL;

    /** @var RateAmountMessagesItemsExtensionItems[]|array */
    public $extension = NULL;
    
    /** @var RateAmountMessagesItemsRatesItems[]|array */
    public $rates = NULL;

    /**
     * @param RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl
     * @param RateAmountMessagesItemsRatesItems[]|array $rates
     */
    public function __construct(RateAmountMessagesItemsStatusApplicationControl $statusApplicationControl = NULL, $rates = NULL, $restrictionStatus = NULL, $lengthsOfStay = NULL, $advancedBookingOffset = NULL, $extension = NULL)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        $this->rates = $rates;
        $this->restrictionStatus = $restrictionStatus;
        $this->lengthsOfStay = $lengthsOfStay;
        $this->advancedBookingOffset = $advancedBookingOffset;
        $this->extension = $extension;
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
        $properties->restrictionStatus = Schema::arr();
        $properties->restrictionStatus->items = RateAmountMessagesItemsRestrictionStatusItems::schema();
        $properties->restrictionStatus->title = "The Restrictionstatus Schema";
        $ownerSchema->addPropertyMapping('RestrictionStatus', self::names()->restrictionStatus);
        $properties->lengthsOfStay = Schema::arr();
        $properties->lengthsOfStay->items = RateAmountMessagesItemsLengthsOfStayItems::schema();
        $properties->lengthsOfStay->title = "The Lengthsofstay Schema";
        $ownerSchema->addPropertyMapping('LengthsOfStay', self::names()->lengthsOfStay);
        $properties->advancedBookingOffset = Schema::arr();
        $properties->advancedBookingOffset->items = RateAmountMessagesItemsAdvancedBookingOffsetItems::schema();
        $properties->advancedBookingOffset->title = "The Advancedbookingoffset Schema";
        $ownerSchema->addPropertyMapping('AdvancedBookingOffset', self::names()->advancedBookingOffset);
        $properties->extension = Schema::arr();
        $properties->extension->items = RateAmountMessagesItemsExtensionItems::schema();
        $properties->extension->title = "The Extension Schema";
        $ownerSchema->addPropertyMapping('Extension', self::names()->extension);
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

    /**
     * @param string $key
     * @return RateAmountMessagesItemsRatesItems|null
     * @codeCoverageIgnoreStart
     */
    public function getRatesByKey($key)
    {
        if(is_array($this->rates) && key_exists($key, $this->rates) ) { return $this->rates[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @param RateAmountMessagesItemsRatesItems $RateAmountMessagesItemsRatesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatesByKey($key, RateAmountMessagesItemsRatesItems $RateAmountMessagesItemsRatesItems)
    {
        if(!is_array($this->rates)) { $this->rates = []; }
        $this->rates[$key] = $RateAmountMessagesItemsRatesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return RateAmountMessagesItemsRestrictionStatusItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsRestrictionStatusItems[]|array $restrictionStatus
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestrictionStatus($restrictionStatus = NULL)
    {
        $this->restrictionStatus = $restrictionStatus;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsRestrictionStatusItems $RateAmountMessagesItemsRestrictionStatusItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRestrictionStatus(RateAmountMessagesItemsRestrictionStatusItems $RateAmountMessagesItemsRestrictionStatusItems)
    {
        if(!is_array($this->restrictionStatus)) { $this->restrictionStatus = []; }
        $this->restrictionStatus[] = $RateAmountMessagesItemsRestrictionStatusItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @return RateAmountMessagesItemsRestrictionStatusItems|null
     * @codeCoverageIgnoreStart
     */
    public function getRestrictionStatusByKey($key)
    {
        if(is_array($this->restrictionStatus) && key_exists($key, $this->restrictionStatus) ) { return $this->restrictionStatus[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @param RateAmountMessagesItemsRestrictionStatusItems $RateAmountMessagesItemsRestrictionStatusItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestrictionStatusByKey($key, RateAmountMessagesItemsRestrictionStatusItems $RateAmountMessagesItemsRestrictionStatusItems)
    {
        if(!is_array($this->restrictionStatus)) { $this->restrictionStatus = []; }
        $this->restrictionStatus[$key] = $RateAmountMessagesItemsRestrictionStatusItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @return RateAmountMessagesItemsLengthsOfStayItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsLengthsOfStayItems[]|array $lengthsOfStay
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLengthsOfStay($lengthsOfStay = NULL)
    {
        $this->lengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsLengthsOfStayItems $RateAmountMessagesItemsLengthsOfStayItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addLengthsOfStay(RateAmountMessagesItemsLengthsOfStayItems $RateAmountMessagesItemsLengthsOfStayItems)
    {
        if(!is_array($this->lengthsOfStay)) { $this->lengthsOfStay = []; }
        $this->lengthsOfStay[] = $RateAmountMessagesItemsLengthsOfStayItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @return RateAmountMessagesItemsLengthsOfStayItems|null
     * @codeCoverageIgnoreStart
     */
    public function getLengthsOfStayByKey($key)
    {
        if(is_array($this->lengthsOfStay) && key_exists($key, $this->lengthsOfStay) ) { return $this->lengthsOfStay[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @param RateAmountMessagesItemsLengthsOfStayItems $RateAmountMessagesItemsLengthsOfStayItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLengthsOfStayByKey($key, RateAmountMessagesItemsLengthsOfStayItems $RateAmountMessagesItemsLengthsOfStayItems)
    {
        if(!is_array($this->lengthsOfStay)) { $this->lengthsOfStay = []; }
        $this->lengthsOfStay[$key] = $RateAmountMessagesItemsLengthsOfStayItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @return RateAmountMessagesItemsAdvancedBookingOffsetItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAdvancedBookingOffset()
    {
        return $this->advancedBookingOffset;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsAdvancedBookingOffsetItems[]|array $advancedBookingOffset
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdvancedBookingOffset($advancedBookingOffset = NULL)
    {
        $this->advancedBookingOffset = $advancedBookingOffset;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsAdvancedBookingOffsetItems $RateAmountMessagesItemsAdvancedBookingOffsetItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addAdvancedBookingOffset(RateAmountMessagesItemsAdvancedBookingOffsetItems $RateAmountMessagesItemsAdvancedBookingOffsetItems)
    {
        if(!is_array($this->advancedBookingOffset)) { $this->advancedBookingOffset = []; }
        $this->advancedBookingOffset[] = $RateAmountMessagesItemsAdvancedBookingOffsetItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @return RateAmountMessagesItemsAdvancedBookingOffsetItems|null
     * @codeCoverageIgnoreStart
     */
    public function getAdvancedBookingOffsetByKey($key)
    {
        if(is_array($this->advancedBookingOffset) && key_exists($key, $this->advancedBookingOffset) ) { return $this->advancedBookingOffset[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @param RateAmountMessagesItemsAdvancedBookingOffsetItems $RateAmountMessagesItemsAdvancedBookingOffsetItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdvancedBookingOffsetByKey($key, RateAmountMessagesItemsAdvancedBookingOffsetItems $RateAmountMessagesItemsAdvancedBookingOffsetItems)
    {
        if(!is_array($this->advancedBookingOffset)) { $this->advancedBookingOffset = []; }
        $this->advancedBookingOffset[$key] = $RateAmountMessagesItemsAdvancedBookingOffsetItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @return RateAmountMessagesItemsExtensionItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsExtensionItems[]|array $extension
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExtension($extension = NULL)
    {
        $this->extension = $extension;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param RateAmountMessagesItemsExtensionItems $RateAmountMessagesItemsExtensionItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addExtension(RateAmountMessagesItemsExtensionItems $RateAmountMessagesItemsExtensionItems)
    {
        if(!is_array($this->extension)) { $this->extension = []; }
        $this->extension[] = $RateAmountMessagesItemsExtensionItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @return RateAmountMessagesItemsExtensionItems|null
     * @codeCoverageIgnoreStart
     */
    public function getExtensionByKey($key)
    {
        if(is_array($this->extension) && key_exists($key, $this->extension) ) { return $this->extension[$key]; }
        return null;
    }
    /** @codeCoverageIgnoreEnd */
    
    /**
     * @param string $key
     * @param RateAmountMessagesItemsExtensionItems $RateAmountMessagesItemsExtensionItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExtensionByKey($key, RateAmountMessagesItemsExtensionItems $RateAmountMessagesItemsExtensionItems)
    {
        if(!is_array($this->extension)) { $this->extension = []; }
        $this->extension[$key] = $RateAmountMessagesItemsExtensionItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
    
    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}