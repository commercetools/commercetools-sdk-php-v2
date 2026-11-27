<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributionModel extends JsonObjectModel implements Attribution
{


    /**
     *
     * @var ?string
     */
    protected $clientId;

    /**
     *
     * @var ?string
     */
    protected $source;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $clientId = null,
        ?string $source = null
    ) {
        $this->clientId = $clientId;
        $this->source = $source;

    }

    /**
     * <p><a href="/general-concepts#identifier">ID</a> of the <a href="ctp:api:type:ApiClient">API Client</a> that made the change.</p>
     *
     *
     * @return null|string
     */
    public function getClientId()
    {
        if (is_null($this->clientId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CLIENT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->clientId = (string) $data;
        }

        return $this->clientId;
    }

    /**
     * <p>Method used to initiate the change.</p>
     *
     *
     * @return null|string
     */
    public function getSource()
    {
        if (is_null($this->source)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->source = (string) $data;
        }

        return $this->source;
    }


    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @param ?string $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }



}
