<?php

declare(strict_types=1);

namespace Fop\Meetup\ValueObject;

use Location\Coordinate;

final class Location
{
    public function __construct(
        private readonly string $city,
        private readonly string $country,
        private readonly Coordinate $coordinate
    ) {
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCoordinateLatitude(): float
    {
        return $this->coordinate->getLat();
    }

    public function getCoordinateLongitude(): float
    {
        return $this->coordinate->getLng();
    }
}
