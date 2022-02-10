<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingRoleOnChannelErrorModel extends JsonObjectModel implements MissingRoleOnChannelError
{
    public const DISCRIMINATOR_VALUE = 'MissingRoleOnChannel';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $channel;

    /**
     * @var ?string
     */
    protected $missingRole;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?ChannelResourceIdentifier $channel = null,
        ?string $missingRole = null
    ) {
        $this->message = $message;
        $this->channel = $channel;
        $this->missingRole = $missingRole;
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
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Describes the purpose and type of the Channel. A Channel can have one or more roles.</p>
     *
     * @return null|string
     */
    public function getMissingRole()
    {
        if (is_null($this->missingRole)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MISSING_ROLE);
            if (is_null($data)) {
                return null;
            }
            $this->missingRole = (string) $data;
        }

        return $this->missingRole;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?string $missingRole
     */
    public function setMissingRole(?string $missingRole): void
    {
        $this->missingRole = $missingRole;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
