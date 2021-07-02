<?php

namespace Php\Package;

class Fill
{
    public function fill(array &$coll, string $value, ?int $start = 0, ?int $end = null): array
    {
        $count = count($coll);
        $end = $end ?? $count;
        $end = $end > $count ? $count : $end;

        for ($i = $start; $i < $end; $i += 1) {
            $coll[$i] = $value;
        }
        return $coll;
    }
}
