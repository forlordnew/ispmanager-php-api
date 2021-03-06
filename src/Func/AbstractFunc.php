<?php

namespace IspApi\Func;

/**
 * Class AbstractFunc
 * @package IspApi\Func
 */
abstract class AbstractFunc implements FuncInterface
{
    /**
     * @var bool
     */
    protected $isSaveAction = false;

    /**
     * @var string
     */
    protected $func = '';

    /**
     * @var string
     */
    protected $elid = '';

    /**
     * @var string
     */
    protected $plid = '';

    /**
     * @var array
     */
    protected $additional = [];

    /**
     * Domain constructor.
     * @param string $elid
     * @param string $plid
     */
    public function __construct(string $elid = '', string $plid = '')
    {
        if ($elid) {
            $this->elid = $elid;
        }
        if ($plid) {
            $this->plid = $plid;
        }
    }

    /**
     * @param array $additional
     * @return self
     */
    public function setAdditional(array $additional): self
    {
        if (empty($this->additional)) {
            $this->additional = $additional;
            return $this;
        }
        $this->additional = \array_merge($this->additional, $additional);
        return $this;
    }

    /**
     * @return string
     */
    final public function getFunc(): string
    {
        return $this->func;
    }

    /**
     * @return string
     */
    final public function getElid(): string
    {
        return $this->elid;
    }

    /**
     * @return string
     */
    final public function getPlid(): string
    {
        return $this->plid;
    }

    /**
     * @return bool
     */
    final public function isSaveAction(): bool
    {
        return $this->isSaveAction;
    }

    /**
     * @return array
     */
    final public function getAdditional(): array
    {
        return $this->additional;
    }
}