<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesMultipartRequest>
 */
final class AgentResponsesMultipartRequestBuilder implements Builder
{
    /**

     * @var null|AgentResponsesPayload|AgentResponsesPayloadBuilder
     */
    private $payload;

    /**

     * @var ?array
     */
    private $files;

    /**
     * <p>JSON document matching <a href="ctp:api:type:AgentResponsesPayload">AgentResponsesPayload</a>. Must include <code>outputType</code> and <code>locale</code>. At least one of <code>prompt</code> or <code>files</code> must be provided.</p>
     *

     * @return null|AgentResponsesPayload
     */
    public function getPayload()
    {
        return $this->payload instanceof AgentResponsesPayloadBuilder ? $this->payload->build() : $this->payload;
    }

    /**
     * <p>Supporting files. Repeat this part for each file. Maximum of 3 files, 20 MB each. Allowed content types: <code>application/pdf</code>, <code>text/plain</code>, <code>text/csv</code>, <code>application/vnd.openxmlformats-officedocument.wordprocessingml.document</code>, <code>application/vnd.openxmlformats-officedocument.spreadsheetml.sheet</code>, <code>message/rfc822</code>, <code>text/markdown</code>, <code>text/html</code>.</p>
     *

     * @return null|array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param ?AgentResponsesPayload $payload
     * @return $this
     */
    public function withPayload(?AgentResponsesPayload $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @param ?array $files
     * @return $this
     */
    public function withFiles(?array $files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @deprecated use withPayload() instead
     * @return $this
     */
    public function withPayloadBuilder(?AgentResponsesPayloadBuilder $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    public function build(): AgentResponsesMultipartRequest
    {
        return new AgentResponsesMultipartRequestModel(
            $this->payload instanceof AgentResponsesPayloadBuilder ? $this->payload->build() : $this->payload,
            $this->files
        );
    }

    public static function of(): AgentResponsesMultipartRequestBuilder
    {
        return new self();
    }
}
