<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<DiscountCodeNonApplicableError>
 */
final class DiscountCodeNonApplicableErrorBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $message;
    
    /**
     * @var ?string
     */
    protected $reason;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validityCheckTime;
    
    /**
     * @var ?string
     */
    protected $discountCode;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;
    
    /**
     * @var ?string
     */
    protected $dicountCodeId;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       return $this->message;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getReason()
    {
       return $this->reason;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidityCheckTime()
    {
       return $this->validityCheckTime;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDiscountCode()
    {
       return $this->discountCode;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidUntil()
    {
       return $this->validUntil;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidFrom()
    {
       return $this->validFrom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDicountCodeId()
    {
       return $this->dicountCodeId;
    }
    /**
     * @return $this
     */
    final public function withCode(?string $code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessage(?string $message)
    {
        $this->message = $message;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReason(?string $reason)
    {
        $this->reason = $reason;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidityCheckTime(?DateTimeImmutable $validityCheckTime)
    {
        $this->validityCheckTime = $validityCheckTime;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountCode(?string $discountCode)
    {
        $this->discountCode = $discountCode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDicountCodeId(?string $dicountCodeId)
    {
        $this->dicountCodeId = $dicountCodeId;
        
        return $this;
    }
    
    public function build(): DiscountCodeNonApplicableError {
        return new DiscountCodeNonApplicableErrorModel(
            $this->code,
            $this->message,
            $this->reason,
            $this->validityCheckTime,
            $this->discountCode,
            $this->validUntil,
            $this->validFrom,
            $this->dicountCodeId
        );
    }
    
    public static function of(): DiscountCodeNonApplicableErrorBuilder
    {
        return new self();
    }
}