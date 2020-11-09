<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailure;
use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailureModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class EditPreviewFailedErrorModel extends JsonObjectModel implements EditPreviewFailedError
{
    public const DISCRIMINATOR_VALUE = 'EditPreviewFailed';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?OrderEditPreviewFailure
     */
    protected $result;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?OrderEditPreviewFailure $result = null
    ) {
        $this->message = $message;
        $this->result = $result;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|OrderEditPreviewFailure
     */
    public function getResult()
    {
        if (is_null($this->result)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESULT);
            if (is_null($data)) {
                return null;
            }

            $this->result = OrderEditPreviewFailureModel::of($data);
        }

        return $this->result;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?OrderEditPreviewFailure $result
     */
    public function setResult(?OrderEditPreviewFailure $result): void
    {
        $this->result = $result;
    }
}
