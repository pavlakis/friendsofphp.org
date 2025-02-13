<?php

declare(strict_types=1);

namespace Fop\Core\Controller;

use Fop\Core\ValueObject\Routing\RouteName;
use Fop\Meetup\Repository\MeetupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomepageController extends AbstractController
{
    public function __construct(
        private readonly MeetupRepository $meetupRepository,
    ) {
    }

    #[Route(path: '/', name: RouteName::HOMEPAGE)]
    public function __invoke(): Response
    {
        return $this->render('index.twig', [
            'meetups' => $this->meetupRepository->fetchAll(),
        ]);
    }
}
