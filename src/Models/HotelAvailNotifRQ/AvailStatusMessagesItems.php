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
class AvailStatusMessagesItems extends ClassStructure
{
    /** @var AvailStatusMessagesItemsStatusApplicationControl */
    public $statusApplicationControl = NULL;

    /** @var int */
    public $bookingLimit = NULL;

    /** @var AvailStatusMessagesItemsRestrictionStatusItems[]|array */
    public $restrictionStatus = NULL;

    /** @var AvailStatusMessagesItemsLengthsOfStayItems[]|array */
    public $lengthsOfStay = NULL;

    /** @var AvailStatusMessagesItemsAdvancedBookingOffsetItems[]|array */
    public $advancedBookingOffset = NULL;

    /** @var AvailStatusMessagesItemsRatesItems[]|array */
    public $rates = NULL;

    /**
     * @param AvailStatusMessagesItemsStatusApplicationControl $statusApplicationControl
     * @param int $bookingLimit
     * @param AvailStatusMessagesItemsRestrictionStatusItems[]|array $restrictionStatus
     * @param AvailStatusMessagesItemsLengthsOfStayItems[]|array $lengthsOfStay
     * @param AvailStatusMessagesItemsAdvancedBookingOffsetItems[]|array $advancedBookingOffset
     * @param AvailStatusMessagesItemsRatesItems[]|array $rates
     */
    public function __construct(AvailStatusMessagesItemsStatusApplicationControl $statusApplicationControl = NULL, $bookingLimit = NULL, $restrictionStatus = NULL, $lengthsOfStay = NULL, $advancedBookingOffset = NULL, $rates = NULL)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        $this->bookingLimit = $bookingLimit;
        $this->restrictionStatus = $restrictionStatus;
        $this->lengthsOfStay = $lengthsOfStay;
        $this->advancedBookingOffset = $advancedBookingOffset;
        $this->rates = $rates;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->statusApplicationControl = AvailStatusMessagesItemsStatusApplicationControl::schema();
        $ownerSchema->addPropertyMapping('StatusApplicationControl', self::names()->statusApplicationControl);
        $properties->bookingLimit = Schema::integer();
        $properties->bookingLimit->title = "The Bookinglimit Schema";
        $properties->bookingLimit->default = 0;
        $ownerSchema->addPropertyMapping('BookingLimit', self::names()->bookingLimit);
        $properties->restrictionStatus = Schema::arr();
        $properties->restrictionStatus->items = AvailStatusMessagesItemsRestrictionStatusItems::schema();
        $properties->restrictionStatus->title = "The Restrictionstatus Schema";
        $ownerSchema->addPropertyMapping('RestrictionStatus', self::names()->restrictionStatus);
        $properties->lengthsOfStay = Schema::arr();
        $properties->lengthsOfStay->items = AvailStatusMessagesItemsLengthsOfStayItems::schema();
        $properties->lengthsOfStay->title = "The Lengthsofstay Schema";
        $ownerSchema->addPropertyMapping('LengthsOfStay', self::names()->lengthsOfStay);
        $properties->advancedBookingOffset = Schema::arr();
        $properties->advancedBookingOffset->items = AvailStatusMessagesItemsAdvancedBookingOffsetItems::schema();
        $properties->advancedBookingOffset->title = "The Advancedbookingoffset Schema";
        $ownerSchema->addPropertyMapping('AdvancedBookingOffset', self::names()->advancedBookingOffset);
        $properties->rates = Schema::arr();
        $properties->rates->items = AvailStatusMessagesItemsRatesItems::schema();
        $properties->rates->title = "The Rates Schema";
        $ownerSchema->addPropertyMapping('Rates', self::names()->rates);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'StatusApplicationControl',
        );
    }

    /**
     * @return AvailStatusMessagesItemsStatusApplicationControl
     * @codeCoverageIgnoreStart
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsStatusApplicationControl $statusApplicationControl
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStatusApplicationControl(AvailStatusMessagesItemsStatusApplicationControl $statusApplicationControl = NULL)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getBookingLimit()
    {
        return $this->bookingLimit;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $bookingLimit
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBookingLimit($bookingLimit = NULL)
    {
        $this->bookingLimit = $bookingLimit;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsRestrictionStatusItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsRestrictionStatusItems[]|array $restrictionStatus
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
     * @param AvailStatusMessagesItemsRestrictionStatusItems $AvailStatusMessagesItemsRestrictionStatusItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRestrictionStatus(AvailStatusMessagesItemsRestrictionStatusItems $AvailStatusMessagesItemsRestrictionStatusItems)
    {
        if(!is_array($this->restrictionStatus)) { $this->restrictionStatus = []; }
        $this->restrictionStatus[] = $AvailStatusMessagesItemsRestrictionStatusItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsRestrictionStatusItems|null
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
     * @param AvailStatusMessagesItemsRestrictionStatusItems $AvailStatusMessagesItemsRestrictionStatusItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestrictionStatusByKey($key, AvailStatusMessagesItemsRestrictionStatusItems $AvailStatusMessagesItemsRestrictionStatusItems)
    {
        if(!is_array($this->restrictionStatus)) { $this->restrictionStatus = []; }
        $this->restrictionStatus[$key] = $AvailStatusMessagesItemsRestrictionStatusItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsLengthsOfStayItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsLengthsOfStayItems[]|array $lengthsOfStay
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
     * @param AvailStatusMessagesItemsLengthsOfStayItems $AvailStatusMessagesItemsLengthsOfStayItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addLengthsOfStay(AvailStatusMessagesItemsLengthsOfStayItems $AvailStatusMessagesItemsLengthsOfStayItems)
    {
        if(!is_array($this->lengthsOfStay)) { $this->lengthsOfStay = []; }
        $this->lengthsOfStay[] = $AvailStatusMessagesItemsLengthsOfStayItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsLengthsOfStayItems|null
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
     * @param AvailStatusMessagesItemsLengthsOfStayItems $AvailStatusMessagesItemsLengthsOfStayItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLengthsOfStayByKey($key, AvailStatusMessagesItemsLengthsOfStayItems $AvailStatusMessagesItemsLengthsOfStayItems)
    {
        if(!is_array($this->lengthsOfStay)) { $this->lengthsOfStay = []; }
        $this->lengthsOfStay[$key] = $AvailStatusMessagesItemsLengthsOfStayItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsAdvancedBookingOffsetItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAdvancedBookingOffset()
    {
        return $this->advancedBookingOffset;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsAdvancedBookingOffsetItems[]|array $advancedBookingOffset
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
     * @param AvailStatusMessagesItemsAdvancedBookingOffsetItems $AvailStatusMessagesItemsAdvancedBookingOffsetItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addAdvancedBookingOffset(AvailStatusMessagesItemsAdvancedBookingOffsetItems $AvailStatusMessagesItemsAdvancedBookingOffsetItems)
    {
        if(!is_array($this->advancedBookingOffset)) { $this->advancedBookingOffset = []; }
        $this->advancedBookingOffset[] = $AvailStatusMessagesItemsAdvancedBookingOffsetItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsAdvancedBookingOffsetItems|null
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
     * @param AvailStatusMessagesItemsAdvancedBookingOffsetItems $AvailStatusMessagesItemsAdvancedBookingOffsetItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdvancedBookingOffsetByKey($key, AvailStatusMessagesItemsAdvancedBookingOffsetItems $AvailStatusMessagesItemsAdvancedBookingOffsetItems)
    {
        if(!is_array($this->advancedBookingOffset)) { $this->advancedBookingOffset = []; }
        $this->advancedBookingOffset[$key] = $AvailStatusMessagesItemsAdvancedBookingOffsetItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return AvailStatusMessagesItemsRatesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getRates()
    {
        return $this->rates;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param AvailStatusMessagesItemsRatesItems[]|array $rates
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
     * @param AvailStatusMessagesItemsRatesItems $AvailStatusMessagesItemsRatesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function addRates(AvailStatusMessagesItemsRatesItems $AvailStatusMessagesItemsRatesItems)
    {
        if(!is_array($this->rates)) { $this->rates = []; }
        $this->rates[] = $AvailStatusMessagesItemsRatesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $key
     * @return AvailStatusMessagesItemsRatesItems|null
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
     * @param AvailStatusMessagesItemsRatesItems $AvailStatusMessagesItemsRatesItems
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRatesByKey($key, AvailStatusMessagesItemsRatesItems $AvailStatusMessagesItemsRatesItems)
    {
        if(!is_array($this->rates)) { $this->rates = []; }
        $this->rates[$key] = $AvailStatusMessagesItemsRatesItems;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}