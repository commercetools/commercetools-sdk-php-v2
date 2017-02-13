<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Project extends JsonObject {
    protected $key;
    protected $name;
    protected $countries;
    protected $currencies;
    protected $languages;
    protected $createdAt;
    protected $trialUntil;
    protected $messages;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return array
     */
    public function getCountries(): array
    {
        if (is_null($this->countries)) {
            $value = $this->raw('countries');
            if (!is_null($value)) {
                $this->countries = $value;
            } else {
                return [];
            }
        }
        return $this->countries;
    }
                

    /**
     * @return array
     */
    public function getCurrencies(): array
    {
        if (is_null($this->currencies)) {
            $value = $this->raw('currencies');
            if (!is_null($value)) {
                $this->currencies = $value;
            } else {
                return [];
            }
        }
        return $this->currencies;
    }
                

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        if (is_null($this->languages)) {
            $value = $this->raw('languages');
            if (!is_null($value)) {
                $this->languages = $value;
            } else {
                return [];
            }
        }
        return $this->languages;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw('createdAt');
            if (!is_null($value)) {
                $this->createdAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->createdAt;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getTrialUntil(): \DateTimeImmutable
    {
        if (is_null($this->trialUntil)) {
            $value = $this->raw('trialUntil');
            if (!is_null($value)) {
                $this->trialUntil = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->trialUntil;
    }
                

    /**
     * @return MessageConfiguration
     */
    public function getMessages(): MessageConfiguration
    {
        if (is_null($this->messages)) {
            $value = $this->raw('messages');
            if (!is_null($value)) {
                $this->messages = Mapper::map($value, MessageConfiguration::class);
            } else {
                return Mapper::map([], MessageConfiguration::class);
            }
        }
        return $this->messages;
    }
                
}
