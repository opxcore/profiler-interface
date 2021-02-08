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
     * Create og get profiler singleton.
     *
     * @param int|null $startTime
     * @param int|null $startMem
     *
     * @return  ProfilerInterface
     */
    public static function getProfiler(?int $startTime = null, ?int $startMem = null): ProfilerInterface;

    /**
     * Profiler constructor.
     *
     * @param int|null $startTime
     * @param int|null $startMem
     *
     * @return  void
     */
    public function __construct(?int $startTime = null, ?int $startMem = null);

    /**
     * Start profiling stopwatch.
     *
     * @param string $action
     *
     * @return  void
     */
    public function profilingStart(string $action): void;

    /**
     * Write action to profiling or get whole profiling list.
     *
     * @param string|null $action
     * @param int|null $timestamp
     * @param int|null $memory
     *
     * @return  void
     */
    public function profilingStop(?string $action = null, ?int $timestamp = null, ?int $memory = null): void;

    /**
     * Returns profiling list or set profiling mode enabled or disabled.
     *
     * @param bool|null $enable
     *
     * @return  array[]|null
     */
    public function profiling(?bool $enable = null): ?array;
}