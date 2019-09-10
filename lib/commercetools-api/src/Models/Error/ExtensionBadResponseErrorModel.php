<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class ExtensionBadResponseErrorModel extends JsonObjectModel implements ExtensionBadResponseError
{
    const DISCRIMINATOR_VALUE = 'ExtensionBadResponse';
    public function __construct(
        string $code = null,
        string $message = null,
        LocalizedString $localizedMessage = null,
        JsonObject $extensionExtraInfo = null,
        ErrorByExtension $errorByExtension = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->localizedMessage = $localizedMessage;
        $this->extensionExtraInfo = $extensionExtraInfo;
        $this->errorByExtension = $errorByExtension;
        
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
     * @var ?LocalizedString
     */
    protected $localizedMessage;
    
    /**
     * @var ?JsonObject
     */
    protected $extensionExtraInfo;
    
    /**
     * @var ?ErrorByExtension
     */
    protected $errorByExtension;

    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getMessage()
    {
       if (is_null($this->message)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ErrorObject::FIELD_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           $this->message = (string)$data;
       }
       return $this->message;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLocalizedMessage()
    {
       if (is_null($this->localizedMessage)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ExtensionBadResponseError::FIELD_LOCALIZED_MESSAGE);
           if (is_null($data)) {
               return null;
           }
           
           $this->localizedMessage = LocalizedStringModel::of($data);
       }
       return $this->localizedMessage;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getExtensionExtraInfo()
    {
       if (is_null($this->extensionExtraInfo)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ExtensionBadResponseError::FIELD_EXTENSION_EXTRA_INFO);
           if (is_null($data)) {
               return null;
           }
           $this->extensionExtraInfo = JsonObjectModel::of($data);
       }
       return $this->extensionExtraInfo;
    }
    
    /**
     *
     * @return ErrorByExtension|null
     */
    final public function getErrorByExtension()
    {
       if (is_null($this->errorByExtension)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ExtensionBadResponseError::FIELD_ERROR_BY_EXTENSION);
           if (is_null($data)) {
               return null;
           }
           
           $this->errorByExtension = ErrorByExtensionModel::of($data);
       }
       return $this->errorByExtension;
    }
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
    
    final public function setLocalizedMessage(?LocalizedString $localizedMessage): void
    {
        $this->localizedMessage = $localizedMessage;
    }
    
    final public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void
    {
        $this->extensionExtraInfo = $extensionExtraInfo;
    }
    
    final public function setErrorByExtension(?ErrorByExtension $errorByExtension): void
    {
        $this->errorByExtension = $errorByExtension;
    }
    
}