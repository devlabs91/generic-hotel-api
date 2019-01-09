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
class RateAmountMessagesItemsRatesItemsBaseByGuestAmtsItems extends ClassStructure
{
    /** @var int */
    public $ageQualifyingCode = NULL;

    /** @var int */
    public $numberOfGuests = NULL;

    /** @var string */
    public $amountAfterTax = NULL;

    /** @var string */
    public $currencyCode = NULL;

    /**
     * @param int $ageQualifyingCode
     * @param int $numberOfGuests
     * @param string $amountAfterTax
     * @param string $currencyCode
     */
    public function __construct($ageQualifyingCode = NULL, $numberOfGuests = NULL, $amountAfterTax = NULL, $currencyCode = NULL)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        $this->numberOfGuests = $numberOfGuests;
        $this->amountAfterTax = $amountAfterTax;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->ageQualifyingCode = Schema::integer();
        $properties->ageQualifyingCode->title = "The Agequalifyingcode Schema";
        $properties->ageQualifyingCode->default = 0;
        $ownerSchema->addPropertyMapping('AgeQualifyingCode', self::names()->ageQualifyingCode);
        $properties->numberOfGuests = Schema::integer();
        $properties->numberOfGuests->title = "The Numberofguests Schema";
        $properties->numberOfGuests->default = 0;
        $ownerSchema->addPropertyMapping('NumberOfGuests', self::names()->numberOfGuests);
        $properties->amountAfterTax = Schema::string();
        $properties->amountAfterTax->title = "The Amountaftertax Schema";
        $properties->amountAfterTax->default = "";
        $properties->amountAfterTax->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('AmountAfterTax', self::names()->amountAfterTax);
        $properties->currencyCode = Schema::string();
        $properties->currencyCode->title = "The Currencycode Schema";
        $properties->currencyCode->default = "";
        $properties->currencyCode->pattern = "^(.*)$";
        $ownerSchema->addPropertyMapping('CurrencyCode', self::names()->currencyCode);
        $ownerSchema->type = 'object';
        $ownerSchema->title = "The Items Schema";
        $ownerSchema->required = array(
            0 => 'AgeQualifyingCode',
            1 => 'NumberOfGuests',
            2 => 'AmountAfterTax',
            3 => 'CurrencyCode',
        );
    }

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $ageQualifyingCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAgeQualifyingCode($ageQualifyingCode = NULL)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getNumberOfGuests()
    {
        return $this->numberOfGuests;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $numberOfGuests
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNumberOfGuests($numberOfGuests = NULL)
    {
        $this->numberOfGuests = $numberOfGuests;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getAmountAfterTax()
    {
        return $this->amountAfterTax;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $amountAfterTax
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAmountAfterTax($amountAfterTax = NULL)
    {
        $this->amountAfterTax = $amountAfterTax;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $currencyCode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCurrencyCode($currencyCode = NULL)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    public function &toArray()
    {
        $test = json_decode( json_encode( self::export( $this ) ), true);
        return $test;
    }
}