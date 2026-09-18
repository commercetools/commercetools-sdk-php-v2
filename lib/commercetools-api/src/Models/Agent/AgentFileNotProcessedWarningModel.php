<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Api\Models\Warning\WarningObjectModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentFileNotProcessedWarningModel extends JsonObjectModel implements AgentFileNotProcessedWarning
{
    public const DISCRIMINATOR_VALUE = 'FileNotProcessed';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?string
     */
    protected $fileName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $fileName = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->fileName = $fileName;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Plain text description of why the file could not be parsed.</p>
     *
     *
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
     * <p>Name of the file that failed to parse.</p>
     *
     *
     * @return null|string
     */
    public function getFileName()
    {
        if (is_null($this->fileName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FILE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->fileName = (string) $data;
        }

        return $this->fileName;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $fileName
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }
}
