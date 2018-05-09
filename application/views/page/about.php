<div class="text-center">
    <h1><?= $title ?></h1>
    <p class="lead">
        Modular Extensions installation.
    </p>
    <p>
        Modular Extensions makes the CodeIgniter PHP framework modular. Modules are groups of independent components,
        typically model, controller and view, arranged in an application modules sub-directory that can be dropped into
        other CodeIgniter applications.
    </p>

    <p class="text-left">
        MVC is about loose-coupling, and Modular Programming takes that concept to the extreme. A modular application
        can dynamically load and unload modules at runtime, completely separate applications in their own right, which
        interact with the main application and other modules to perform some set of tasks.
    </p>

    <p class="text-left">
        This is most useful when you need to load a view and its data within a view. Think about adding a shopping cart
        to a page. The shopping cart needs its own controller which may call a model to get cart data. Then the
        controller needs to load the data into a view. So instead of the main controller handling the page and the
        shopping cart, the shopping cart MVC can be loaded directly in the page. The main controller doesn’t need to
        know about it, and is totally isolated from it.
    </p>
    <blockquote class="blockquote text-left">
        <p class="mb-0">
            Module Controllers can be used as normal Controllers or HMVC Controllers and they can be used as widgets to
            help you build view partials.
        </p>
        <footer class="blockquote-footer">HMVC stands for Hierarchical Model View Controller</footer>
    </blockquote>
</div>