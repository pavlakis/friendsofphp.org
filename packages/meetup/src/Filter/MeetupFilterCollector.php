<?php declare(strict_types=1);

namespace Fop\Meetup\Filter;

use Fop\Meetup\Contract\MeetupFilterInterface;
use Fop\Meetup\ValueObject\Meetup;

final class MeetupFilterCollector
{
    /**
     * @var MeetupFilterInterface[]
     */
    private array $meetupFilters = [];

    /**
     * @param MeetupFilterInterface[] $meetupFilters
     */
    public function __construct(array $meetupFilters)
    {
        $this->meetupFilters = $meetupFilters;
    }

    /**
     * @param Meetup[] $meetups
     * @return Meetup[]
     */
    public function filter(array $meetups): array
    {
        foreach ($this->meetupFilters as $meetupFilter) {
            $meetups = $meetupFilter->filter($meetups);
        }

        return $meetups;
    }
}
