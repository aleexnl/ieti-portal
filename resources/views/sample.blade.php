<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Sample Page</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images') }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/') }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/') }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/') }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/') }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/') }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/') }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/') }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/') }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('images/') }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/') }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('images/') }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/') }}/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
</head>

<body>
    <div class="container mx-auto px-4">
        <h1>Sample page</h1>
        <p>This is a test page filled with common HTML elements.</p>
        <ul class="list-disc">
            <li>
                <a href="http://www.iesesteveterradas.cat/">This is a text
                    link</a>.
            </li>
            <li>
                <strong>Strong is used to indicate strong importance.</strong>
            </li>
            <li><em>This text has added emphasis.</em></li>
            <li>
                The <b>b element</b> is stylistically different text from normal
                text, without any special importance.
            </li>
            <li>
                The <i>i element</i> is text that is offset from the normal
                text.
            </li>
            <li>
                The <u>u element</u> is text with an unarticulated, though
                explicitly rendered, non-textual annotation.
            </li>
            <li>
                <del>This text is deleted</del> and
                <ins>This text is inserted</ins>.
            </li>
        </ul>
        <p>This is a second list:</p>
        <ol class="list-decimal">
            <li><s>This text has a strikethrough</s>.</li>
            <li>
                <small>This small text is small for for fine print, etc.</small>
            </li>
            <li>
                Abbreviation:
                <abbr title="HyperText Markup Language">HTML</abbr>
            </li>
            <li>
                <q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline
                    quotation.</q>
            </li>
            <li><cite>This is a citation.</cite></li>
            <li>The <dfn>dfn element</dfn> indicates a definition.</li>
            <li>The <mark>mark element</mark> indicates a highlight.</li>
            <li>
                The <var>variable element</var>, such as <var>x</var> =
                <var>y</var>.
            </li>
            <li>
                The time element:
                <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time>
            </li>
        </ol>
        <h2>Sample Form</h2>
        <p>All form fields are required.</p>
        <form>
            <fieldset>
                <legend>Your title here</legend>
                <div class="flex flex-col my-4">
                    <label>Email</label>
                    <input type="text" placeholder="email@dominio.es" />
                </div>
                <div class="flex flex-col my-4">
                    <label>Password</label> <input type="password" />
                </div>

                <div class="flex flex-col my-4">
                    <label>Make your choice:</label>
                    <select>
                        <option>London</option>
                        <option>Paris</option>
                        <option>Barcelona</option>
                        <option>Roma</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Submit" />
                    <button>I'm a button</button>
                    <a class="button hover:underline hover:bg-gray-200" href="https://google.com">I'm a link that
                        appear
                        like a
                        button</a>
                </div>
            </fieldset>
        </form>

        <h3>Super Important data</h3>
        <table>
            <caption>
                The dark side teachers
            </caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Leandro Zabala</td>
                    <td>lzabala@xtec.cat</td>
                    <td>2021/02/24</td>
                    <td>iLoveAjax</td>
                </tr>
                <tr>
                    <td>Enric Mieza</td>
                    <td>emieza@xtec.cat</td>
                    <td>2021/02/24</td>
                    <td>ILovePHP</td>
                </tr>
                <tr>
                    <td>Xavi Gómez</td>
                    <td>xgomez@xtec.cat</td>
                    <td>2021/02/24</td>
                    <td>ILoveCSS</td>
                </tr>
            </tbody>
        </table>

        <p>Break up your page with a horizontal rule or two.</p>
        <hr />
        <p>
            &#169; M9 Disseny d'interficies web 2021<br /><small>IES Esteve Terradas i Illa</small>
        </p>
    </div>
</body>

</html>