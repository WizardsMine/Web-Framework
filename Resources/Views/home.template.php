[{use@master}]

[{fill@head}]
    [{include@partials/head@head}]
[{end_fill@head}]

[{fill@body}]
    <div class="container">
        <div class="content">
            <div class="title">Welcome!</div>
        </div>

        <div class="message">
            {{$message}}
        </div>
    </div>
[{end_fill@body}]