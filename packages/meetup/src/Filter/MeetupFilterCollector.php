<?php declare(strict_types=1);

namespace Fop\Meetup\Filter;

use Fop\Core\ValueObject\Meetup;
use Fop\Meetup\Contract\MeetupFilterInterface;

final class MeetupFilterCollector
{
    /**
     * @var MeetupFilterInterface[]
     */
    private $meetupFilters = [];

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
