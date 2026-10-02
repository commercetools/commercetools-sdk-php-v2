<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesMultipartRequest extends JsonObject
{
    public const FIELD_PAYLOAD = 'payload';
    public const FIELD_FILES = 'files';

    /**
     * <p>JSON document matching <a href="ctp:api:type:AgentResponsesPayload">AgentResponsesPayload</a>. Must include <code>outputType</code> and <code>locale</code>. At least one of <code>prompt</code> or <code>files</code> must be provided.</p>
     *

     * @return null|AgentResponsesPayload
     */
    public function getPayload();

    /**
     * <p>Supporting files. Repeat this part for each file. Maximum of 3 files, 20 MB each. Allowed content types: <code>application/pdf</code>, <code>text/plain</code>, <code>text/csv</code>, <code>application/vnd.openxmlformats-officedocument.wordprocessingml.document</code>, <code>application/vnd.openxmlformats-officedocument.spreadsheetml.sheet</code>, <code>message/rfc822</code>, <code>text/markdown</code>, <code>text/html</code>.</p>
     *

     * @return null|array
     */
    public function getFiles();

    /**
     * @param ?AgentResponsesPayload $payload
     */
    public function setPayload(?AgentResponsesPayload $payload): void;

    /**
     * @param ?array $files
     */
    public function setFiles(?array $files): void;
}
