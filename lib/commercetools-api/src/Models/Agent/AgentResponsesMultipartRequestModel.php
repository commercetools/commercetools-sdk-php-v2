<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentResponsesMultipartRequestModel extends JsonObjectModel implements AgentResponsesMultipartRequest
{
    /**
     *
     * @var ?AgentResponsesPayload
     */
    protected $payload;

    /**
     *
     * @var ?array
     */
    protected $files;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AgentResponsesPayload $payload = null,
        ?array $files = null
    ) {
        $this->payload = $payload;
        $this->files = $files;
    }

    /**
     * <p>JSON document matching <a href="ctp:api:type:AgentResponsesPayload">AgentResponsesPayload</a>. Must include <code>outputType</code> and <code>locale</code>. At least one of <code>prompt</code> or <code>files</code> must be provided.</p>
     *
     *
     * @return null|AgentResponsesPayload
     */
    public function getPayload()
    {
        if (is_null($this->payload)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYLOAD);
            if (is_null($data)) {
                return null;
            }

            $this->payload = AgentResponsesPayloadModel::of($data);
        }

        return $this->payload;
    }

    /**
     * <p>Supporting files. Repeat this part for each file. Maximum of 3 files, 20 MB each. Allowed content types: <code>application/pdf</code>, <code>text/plain</code>, <code>text/csv</code>, <code>application/vnd.openxmlformats-officedocument.wordprocessingml.document</code>, <code>application/vnd.openxmlformats-officedocument.spreadsheetml.sheet</code>, <code>message/rfc822</code>, <code>text/markdown</code>, <code>text/html</code>.</p>
     *
     *
     * @return null|array
     */
    public function getFiles()
    {
        if (is_null($this->files)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_FILES);
            if (is_null($data)) {
                return null;
            }
            $this->files = $data;
        }

        return $this->files;
    }


    /**
     * @param ?AgentResponsesPayload $payload
     */
    public function setPayload(?AgentResponsesPayload $payload): void
    {
        $this->payload = $payload;
    }

    /**
     * @param ?array $files
     */
    public function setFiles(?array $files): void
    {
        $this->files = $files;
    }
}
