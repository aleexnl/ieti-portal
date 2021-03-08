<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sample Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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