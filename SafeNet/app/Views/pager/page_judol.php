<?php $pager->setSurroundCount(2) ?>

<div class="custom-pagination-wrapper">
    <ul class="custom-pagination">
        <!-- Previous Page Link -->
        <?php if ($pager->hasPreviousPage()): ?>
            <li class="custom-page-item">
                <a class="custom-page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="Previous">
                    &laquo;
                </a>
            </li>
        <?php else: ?>
            <li class="custom-page-item disabled">
                <span class="custom-page-link">&laquo;</span>
            </li>
        <?php endif; ?>

        <!-- Pagination Links -->
        <?php foreach ($pager->links() as $link): ?>
            <li class="custom-page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="custom-page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>

        <!-- Next Page Link -->
        <?php if ($pager->hasNextPage()): ?>
            <li class="custom-page-item">
                <a class="custom-page-link" href="<?= $pager->getNextPage() ?>" aria-label="Next">
                    &raquo;
                </a>
            </li>
        <?php else: ?>
            <li class="custom-page-item disabled">
                <span class="custom-page-link">&raquo;</span>
            </li>
        <?php endif; ?>
    </ul>
</div>

<style>
    .custom-pagination-wrapper {
        display: flex;
        justify-content: center;
        margin: 40px 0 20px;
    }

    .custom-pagination {
        list-style: none;
        display: flex;
        gap: 10px;
        padding: 0;
    }

    .custom-page-item {
        display: inline-block;
    }

    .custom-page-item.disabled .custom-page-link {
        pointer-events: none;
        opacity: 0.5;
    }

    .custom-page-link {
        display: inline-block;
        padding: 8px 14px;
        text-decoration: none;
        background-color: #f1f1f1;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 6px;
        transition: background-color 0.2s ease-in-out;
    }

    .custom-page-item.active .custom-page-link {
        background-color: #3498db;
        color: white;
        border-color: #3498db;
    }

    .custom-page-link:hover {
        background-color: #e0e0e0;
    }
</style>