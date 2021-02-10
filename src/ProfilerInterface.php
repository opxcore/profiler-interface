<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\App\Interfaces;

interface ProfilerInterface
{
    /**
     * Start profiling stopwatch.
     *
     * @param string $action Action name is used to display name of entry
     * @param int|null $timestamp Externally captured time
     * @param int|null $memory Externally captured memory usage
     *
     * @return  void
     */
    public function start(string $action, ?int $timestamp = null, ?int $memory = null): void;

    /**
     * Write action to profiling or get whole profiling list.
     *
     * @param string $action Action name is used to display name of entry
     * @param int|null $timestamp Externally captured time
     * @param int|null $memory Externally captured memory usage
     *
     * @return  void
     */
    public function stop(string $action, ?int $timestamp = null, ?int $memory = null): void;

    /**
     * Set profiling mode enabled or disabled.
     *
     * @param bool $enable
     *
     * @return  void
     */
    public function enable(bool $enable = true): void;

    /**
     * Returns profiling list.
     *
     * @return  array[]|null
     */
    public function profiling(): ?array;
}