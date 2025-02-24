<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortingController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $algorithms = [
            [
                'name' => 'Bubble Sort',
                'route' => 'app_sorting_bubble',
                'timeComplexity' => 'O(n²)',
                'spaceComplexity' => 'O(1)',
                'stable' => true,
                'description' => 'A simple comparison sort that repeatedly steps through the list, compares adjacent elements and swaps them if they are in the wrong order.'
            ],
            [
                'name' => 'Selection Sort',
                'route' => 'app_sorting_selection',
                'timeComplexity' => 'O(n²)',
                'spaceComplexity' => 'O(1)',
                'stable' => false,
                'description' => 'Divides the input list into a sorted and an unsorted region, and repeatedly selects the smallest element from the unsorted region to add to the sorted region.'
            ],
            [
                'name' => 'Insertion Sort',
                'route' => 'app_sorting_insertion',
                'timeComplexity' => 'O(n²)',
                'spaceComplexity' => 'O(1)',
                'stable' => true,
                'description' => 'Builds the final sorted array one item at a time by repeatedly inserting a new element into the sorted portion of the array.'
            ],
            [
                'name' => 'Merge Sort',
                'route' => 'app_sorting_merge',
                'timeComplexity' => 'O(n log n)',
                'spaceComplexity' => 'O(n)',
                'stable' => true,
                'description' => 'A divide-and-conquer algorithm that recursively breaks down a problem into smaller, more manageable subproblems until they become simple enough to solve directly.'
            ],
            [
                'name' => 'Quick Sort',
                'route' => 'app_sorting_quick',
                'timeComplexity' => 'O(n log n)',
                'spaceComplexity' => 'O(log n)',
                'stable' => false,
                'description' => 'A highly efficient, comparison-based algorithm that uses a divide-and-conquer strategy with a pivot element to partition the array.'
            ],
            [
                'name' => 'Heap Sort',
                'route' => 'app_sorting_heap',
                'timeComplexity' => 'O(n log n)',
                'spaceComplexity' => 'O(1)',
                'stable' => false,
                'description' => 'A comparison-based sorting algorithm that uses a binary heap data structure to build a max-heap and repeatedly extract the maximum element.'
            ],
            [
                'name' => 'Counting Sort',
                'route' => 'app_sorting_counting',
                'timeComplexity' => 'O(n + k)',
                'spaceComplexity' => 'O(k)',
                'stable' => true,
                'description' => 'A non-comparative integer sorting algorithm that works by counting the number of objects having distinct key values.'
            ],
            [
                'name' => 'Radix Sort',
                'route' => 'app_sorting_radix',
                'timeComplexity' => 'O(d * (n + b))',
                'spaceComplexity' => 'O(n + b)',
                'stable' => true,
                'description' => 'A non-comparative sorting algorithm that sorts integers by processing each digit position, starting from the least significant digit.'
            ],
        ];

        return $this->render('home/index.html.twig', [
            'algorithms' => $algorithms
        ]);
    }

    #[Route('/sorting/insertion', name: 'app_sorting_insertion')]
    public function insertion(): Response
    {
        return $this->render('sorting/insertion.html.twig');
    }

    #[Route('/sorting/bubble', name: 'app_sorting_bubble')]
    public function bubble(): Response
    {
        return $this->render('sorting/bubble.html.twig');
    }

    #[Route('/sorting/selection', name: 'app_sorting_selection')]
    public function selection(): Response
    {
        return $this->render('sorting/selection.html.twig');
    }

    #[Route('/sorting/merge', name: 'app_sorting_merge')]
    public function merge(): Response
    {
        return $this->render('sorting/merge.html.twig');
    }

    #[Route('/sorting/quick', name: 'app_sorting_quick')]
    public function quick(): Response
    {
        return $this->render('sorting/quick.html.twig');
    }

    #[Route('/sorting/heap', name: 'app_sorting_heap')]
    public function heap(): Response
    {
        return $this->render('sorting/heap.html.twig');
    }

    #[Route('/sorting/counting', name: 'app_sorting_counting')]
    public function counting(): Response
    {
        return $this->render('sorting/counting.html.twig');
    }

    #[Route('/sorting/radix', name: 'app_sorting_radix')]
    public function radix(): Response
    {
        return $this->render('sorting/radix.html.twig');
    }
}