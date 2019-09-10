<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Api\Models\Message\MessageConfigurationModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ProjectModel extends JsonObjectModel implements Project
{
    /**
     * @var ?ExternalOAuth
     */
    protected $externalOAuth;

    /**
     * @var ?ShippingRateInputType
     */
    protected $shippingRateInputType;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?array
     */
    protected $languages;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?MessageConfiguration
     */
    protected $messages;

    /**
     * @var ?array
     */
    protected $countries;

    /**
     * @var ?string
     */
    protected $trialUntil;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?array
     */
    protected $currencies;

    public function __construct(
        ExternalOAuth $externalOAuth = null,
        ShippingRateInputType $shippingRateInputType = null,
        DateTimeImmutable $createdAt = null,
        array $languages = null,
        string $name = null,
        MessageConfiguration $messages = null,
        array $countries = null,
        string $trialUntil = null,
        int $version = null,
        string $key = null,
        array $currencies = null
    ) {
        $this->externalOAuth = $externalOAuth;
        $this->shippingRateInputType = $shippingRateInputType;
        $this->createdAt = $createdAt;
        $this->languages = $languages;
        $this->name = $name;
        $this->messages = $messages;
        $this->countries = $countries;
        $this->trialUntil = $trialUntil;
        $this->version = $version;
        $this->key = $key;
        $this->currencies = $currencies;
    }

    /**
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        if (is_null($this->externalOAuth)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Project::FIELD_EXTERNAL_O_AUTH);
            if (is_null($data)) {
                return null;
            }

            $this->externalOAuth = ExternalOAuthModel::of($data);
        }

        return $this->externalOAuth;
    }

    /**
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        if (is_null($this->shippingRateInputType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Project::FIELD_SHIPPING_RATE_INPUT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputTypeModel::resolveDiscriminatorClass($data);
            $this->shippingRateInputType = $className::of($data);
        }

        return $this->shippingRateInputType;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Project::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Project::FIELD_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->languages = $data;
        }

        return $this->languages;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Project::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|MessageConfiguration
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Project::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }

            $this->messages = MessageConfigurationModel::of($data);
        }

        return $this->messages;
    }

    /**
     * @return null|array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Project::FIELD_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->countries = $data;
        }

        return $this->countries;
    }

    /**
     * @return null|string
     */
    public function getTrialUntil()
    {
        if (is_null($this->trialUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Project::FIELD_TRIAL_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->trialUntil = (string) $data;
        }

        return $this->trialUntil;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Project::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Project::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|array
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Project::FIELD_CURRENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->currencies = $data;
        }

        return $this->currencies;
    }

    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void
    {
        $this->externalOAuth = $externalOAuth;
    }

    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void
    {
        $this->shippingRateInputType = $shippingRateInputType;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setMessages(?MessageConfiguration $messages): void
    {
        $this->messages = $messages;
    }

    public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }

    public function setTrialUntil(?string $trialUntil): void
    {
        $this->trialUntil = $trialUntil;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Project::FIELD_CREATED_AT]) && $data[Project::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Project::FIELD_CREATED_AT] = $data[Project::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
