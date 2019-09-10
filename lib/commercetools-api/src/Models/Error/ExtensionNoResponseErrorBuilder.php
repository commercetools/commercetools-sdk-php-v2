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
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ExtensionNoResponseError>
 */
final class ExtensionNoResponseErrorBuilder implements Builder
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
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $localizedMessage;
    
    /**
     * @var ?JsonObject
     */
    protected $extensionExtraInfo;
    
    /**
     * @var ?ErrorByExtensionBuilder|ErrorByExtension
     */
    protected $errorByExtension;

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
     * @return LocalizedString|null
     */
    final public function getLocalizedMessage()
    {
       return ($this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage);
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getExtensionExtraInfo()
    {
       return $this->extensionExtraInfo;
    }
    
    /**
     *
     * @return ErrorByExtension|null
     */
    final public function getErrorByExtension()
    {
       return ($this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension);
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
    final public function withLocalizedMessage(?LocalizedString $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExtensionExtraInfo(?JsonObject $extensionExtraInfo)
    {
        $this->extensionExtraInfo = $extensionExtraInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withErrorByExtension(?ErrorByExtension $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLocalizedMessageBuilder(?LocalizedStringBuilder $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withErrorByExtensionBuilder(?ErrorByExtensionBuilder $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;
        
        return $this;
    }
    
    public function build(): ExtensionNoResponseError {
        return new ExtensionNoResponseErrorModel(
            $this->code,
            $this->message,
            ($this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage),
            $this->extensionExtraInfo,
            ($this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension)
        );
    }
    
    public static function of(): ExtensionNoResponseErrorBuilder
    {
        return new self();
    }
}