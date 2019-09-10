<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObjectModel;

final class ReferenceExistsErrorModel extends JsonObjectModel implements ReferenceExistsError
{
    const DISCRIMINATOR_VALUE = 'ReferenceExists';

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
    protected $referencedBy;

    public function __construct(
        string $code = null,
        string $message = null,
        string $referencedBy = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->referencedBy = $referencedBy;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
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
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getReferencedBy()
    {
        if (is_null($this->referencedBy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReferenceExistsError::FIELD_REFERENCED_BY);
            if (is_null($data)) {
                return null;
            }
            $this->referencedBy = (string) $data;
        }

        return $this->referencedBy;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setReferencedBy(?string $referencedBy): void
    {
        $this->referencedBy = $referencedBy;
    }
}
