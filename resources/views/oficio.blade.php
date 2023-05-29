<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial' !important;
            font-size: 12px;
            position: relative;
        }

        .pdf-container {
            margin-inline: 25mm;
            margin-bottom: 20mm;
        }

        .logo {
            display: flex;
            flex-direction: column;
            text-align: center
        }

        .logo h1 {
            font-weight: 700;
        }

        .logo-info {
            font-size: 0.85rem;
        }

        .logo-claves {
            display: flex;
            justify-content: center;
        }

        .logo-claves table>* {
            font-size: 0.6rem;
        }

        .encabezado .departamento,
        .encabezado .numero,
        .encabezado .asunto {
            font-style: bold;
            text-transform: uppercase;
        }

        .contenido {
            line-height: 1.5rem;
            font-size: 1rem;
        }

        .contenido .destinatario {
            font-style: bold;
            text-transform: uppercase;
        }

        .despedida .texto {
            font-style: bold;
            text-transform: uppercase;
        }

        .justify-content-center {
            justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        .text-center {
            text-align: center !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-left {
            text-align: left !important;
        }

        .dotted-border {
            border-right: 1px dotted #fd7e14;
        }

        .text-orange {
            color: #fd7e14;
        }

        .text-gray {
            color: #323435;
        }

        .text-light {
            color: #a1a1a1;
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 0.75rem !important;
        }

        .mt-4 {
            margin-top: 1rem !important;
        }

        .mt-5 {
            margin-top: 1.25rem !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .mx-1 {
            margin-left: 0.25rem !important;
            margin-right: 0.25rem !important;
        }

        .mx-2 {
            margin-left: 0.5rem !important;
            margin-right: 0.5rem !important;
        }

        .mx-3 {
            margin-left: 0.75rem !important;
            margin-right: 0.75rem !important;
        }

        .mx-4 {
            margin-left: 0.1rem !important;
            margin-right: 0.1rem !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 0.75rem !important;
            margin-bottom: 0.75rem !important;
        }

        .my-4 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }


        .px-1 {
            padding-inline: 0.25rem !important;
        }

        .px-2 {
            padding-inline: 0.5rem !important;
        }

        .px-3 {
            padding-inline: 0.75rem !important;
        }

        .px-4 {
            padding-inline: 1rem !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .flex {
            display: flex !important;
        }

        .flex-column {
            flex-direction: column;
        }

        .divider-orange {
            border-top: 1px;
            border-color: #fd7e14;
            width: 450px;
        }

        .divider-orange-v {
            border: none;
            border-left: 1px dotted;
            border-color: #fd7e14;
            height: 10px;
        }

        .despedida {
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        .despedida .imagen {
            width: 80px;
            height: 80px;
        }

        .despedida .remitente,
        .despedida .cargo,
        .despedida .copias,
        .despedida .iniciales {
            text-transform: uppercase;
            font-style: bold;
            margin-top: 0.25rem;
        }

        .despedida .texto {
            text-transform: uppercase;
            font-size: 1rem;
            font-style: bold;
            margin-bottom: 0.75rem;
        }

        .despedida .firma {
            width: 350px;
            margin: 0;
        }

        .despedida .remitente {
            font-size: 1.15rem;
        }

        .despedida .cargo {
            font-size: 1.1rem;
        }

        .despedida .copia {
            font-size: 1rem;
        }

        .despedida .iniciales {
            font-size: 0.75rem;
        }
    </style>
</head>

<body class="pdf-container">
    <div class="logo text-center">
        <h1 class="text-orange m-0">UNIVERSIDAD</h1>
        <h2 class="text-gray m-0">PABLO GUARDADO CHÁVEZ</h2>
        <div class="logo-info m-1">
            <p class="text-light m-0">Registro ante Dirección General de Profesiones</p>
            <p class="text-light m-0">Expediente 07-00096 Clave 070102 México D.F</p>
        </div>
        <hr class="divider-orange">
        <div class="logo-claves flex justify-content-center align-items-center">
            <table class="w-100 text-light text-center">
                <thead>
                    <tr>
                        <th class="text-right dotted-border">PROFESIONAL</th>
                        <th class="text-left">POSGRADOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-right dotted-border">07PSU0013J</td>
                        <td class="text-left">07PSU0013J</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="encabezado text-right mx-4">
        <div class="my-2 departamento">DEPARTAMENTO DE INGRESOS</div>
        <div class="my-2 asunto">ACLARACIÓN DE PAGOS</div>
        <div class="mt-5 lugar">TUXTLA GUTIÉRREZ, CHIAPAS.</div>
        <div class="my-2 numero">OFICIO: UPGCH / DDI / 0001 / 22</div>
    </div>

    <div class="contenido my-5">
        <div class="destinatario">
            A QUIEN CORRESPONDA
        </div>

        <div class="texto my-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, adipisci ut atque consequuntur maxime
            ullam accusamus consectetur possimus ad libero dignissimos officia, nisi, suscipit labore quae eos! Quasi,
            minima mollitia.
            Maxime incidunt in, harum hic nesciunt facere repudiandae dicta vel tenetur, dolorem, eum maiores sint!
            Eveniet sequi sunt nemo, voluptatibus itaque consequatur blanditiis earum repudiandae at laborum odit alias?
            Perferendis.
            Dolore esse, quas harum odit maiores ipsa voluptate quasi animi officia corporis est vel possimus deserunt
            fuga eaque laudantium molestias consectetur accusamus aut placeat. Pariatur eligendi cum minus unde id.
            Quaerat temporibus totam possimus consequuntur nisi pariatur alias suscipit ullam autem, esse reprehenderit
            natus enim nam odit iste ex similique sed! Molestiae id sunt numquam veniam eos saepe, repellat quas!
            Voluptates, quas pariatur reiciendis voluptas distinctio temporibus necessitatibus odio praesentium rerum
            consequatur esse doloribus illo. Rerum suscipit facere consequuntur eveniet deleniti qui aspernatur
            reprehenderit, quasi mollitia, magni quidem molestias harum.
            Eius fuga repellat ad, iste libero voluptatem architecto non consequuntur? Eveniet quae repudiandae
            voluptatum recusandae nulla molestiae excepturi officia esse nam dignissimos in qui temporibus fuga
            adipisci, impedit, fugiat aperiam?
            Et, dolorum aliquam culpa id, repellendus iste, dolore consequatur at obcaecati nulla harum. Minima cum
            accusamus facilis, porro quisquam, nam quae voluptates optio repudiandae recusandae a dolore iure.
            Perferendis, voluptas?
            Inventore dicta ullam at aspernatur odio, nobis mollitia sint quis. Harum in quidem commodi, ducimus, totam
            facere omnis vitae minima tempora at itaque fuga natus nesciunt nihil quam vero autem?
            Quos dolorum magnam saepe fuga, esse nisi aliquid necessitatibus debitis consectetur quo voluptatibus, quas
            quam error ea? Animi voluptas voluptatibus nesciunt, itaque enim maxime dignissimos asperiores accusantium
            officia dolorum explicabo.
            Temporibus suscipit quasi dolorem ea sapiente quibusdam voluptatem in sequi! Aliquid eum reprehenderit
            ratione cumque tempore sed numquam libero voluptatum? Exercitationem maxime tempore aliquam impedit iste
            dolorem quia ullam et.
            Eius obcaecati magnam amet laborum officiis eligendi corrupti, harum molestias blanditiis ipsa alias cum!
            Laborum consectetur qui placeat doloribus sint dolorem assumenda provident neque. Obcaecati nulla amet animi
            inventore accusamus.
            Praesentium, natus aliquam maxime ratione tempora vero quasi eos obcaecati aliquid vel ex veritatis minima
            mollitia, consequuntur odit amet accusamus officiis nesciunt sed similique nostrum? Autem architecto
            voluptates iure nam.
            Molestiae voluptatibus accusantium repellendus eius sapiente deserunt in dolorem debitis blanditiis officia
            laboriosam modi, reiciendis fugiat velit? Facilis vitae corporis beatae eius asperiores error id esse,
            suscipit fugiat quo minima?
            Ea obcaecati accusantium nemo! Necessitatibus nostrum quas incidunt harum id, distinctio accusantium autem
            sunt eveniet molestias ducimus culpa repudiandae maxime optio et porro exercitationem nulla impedit animi
            dolore nihil? Hic!
            Sunt dolor repudiandae modi obcaecati quos veritatis est odit nam quasi perferendis impedit non nulla
            assumenda tempore architecto facilis ab, culpa possimus odio dolorem deleniti laborum doloribus dignissimos
            molestiae! Temporibus.
            Tempora aspernatur magnam praesentium sint officiis ut maiores laboriosam, inventore doloremque eum modi
            delectus recusandae veritatis fugiat excepturi facilis, vel adipisci autem ea, quia hic culpa! Repellat qui
            explicabo et?
            Enim alias sapiente officiis assumenda obcaecati necessitatibus nobis minima animi doloremque similique
            itaque libero perspiciatis veniam facilis corporis nostrum quos dignissimos molestias magni cupiditate
            tempore ducimus, non eaque adipisci. Eos?
            Facilis laborum, error, doloribus suscipit, natus temporibus repudiandae minus quidem facere magnam in. Quae
            porro voluptate officia minima fugit quidem odio deleniti incidunt? Veniam blanditiis quaerat odio corrupti
            dolor labore.
            Sequi, provident autem adipisci quasi voluptatum hic asperiores! Sapiente quis laboriosam consequuntur odio
            alias rerum cumque aperiam nulla, vitae distinctio hic doloribus officia ut aliquid id corrupti in possimus
            nesciunt!
            Voluptas reprehenderit accusantium labore facere voluptatibus at odio nesciunt asperiores! Doloribus eos
            sint, consectetur fugit similique asperiores, atque ad explicabo officiis, obcaecati cupiditate accusamus
            distinctio aliquid? Ad, iure id. Dignissimos.
            Et, assumenda? Modi dolorum, saepe dolorem odit deserunt voluptatem reprehenderit laudantium voluptas nisi
            qui expedita quam labore quo odio alias voluptates vel omnis aperiam quisquam recusandae distinctio minus
            suscipit nemo!
            Iusto, molestiae cupiditate harum mollitia eum culpa delectus hic at sequi itaque aut sit quia veniam a
            ullam officia saepe magni facilis est natus aperiam ad? Minus delectus necessitatibus deleniti.
            Voluptatem possimus dicta, sint laboriosam quis quaerat deserunt sapiente rerum necessitatibus aliquam,
            temporibus nostrum fuga voluptas maiores animi odio laborum quas quidem minus ad! Voluptates non autem
            numquam illo impedit.
            Quidem quasi libero repellendus aliquid assumenda possimus? Neque architecto accusantium eveniet temporibus
            dolorem illo tenetur aut dolorum laboriosam. Laborum velit quo expedita, accusantium autem repellat fuga
            facere adipisci itaque temporibus!
            Quam quis, molestiae inventore earum delectus nostrum nisi dignissimos blanditiis. Facere quia eaque rerum
            odit praesentium eligendi, illum animi saepe fugiat repellat harum amet iste fuga! Officiis reiciendis nulla
            omnis!
            Asperiores iste aperiam qui saepe voluptatibus, quos, ut ad voluptatem nulla ratione labore quis facere
            optio necessitatibus illo numquam consequatur impedit, corporis quasi deleniti inventore est minima tempore
            odio! Aspernatur.
            Adipisci autem optio inventore reiciendis pariatur laborum dolores. Optio praesentium dignissimos dolore,
            eius dolores recusandae quidem dolorum dolor placeat maxime consequatur quisquam labore rerum explicabo
            molestias esse aperiam laudantium iure?
            Nam blanditiis repellendus veniam hic quaerat ipsam sapiente nulla illo rem laudantium repudiandae, maxime
            nemo ullam at fuga doloribus libero enim, dolore fugit id quia tenetur aliquam beatae! Veniam, dolorum?
            Eos saepe odio suscipit nostrum vel illo officiis. Repudiandae, amet obcaecati. Quidem inventore fuga alias
            non? Quos harum culpa velit atque consequuntur, ipsam, omnis odit deserunt non iure reiciendis? Eaque!
            Earum laboriosam ex, minima magni, omnis, eum quis dignissimos rem repudiandae vero architecto facilis
            autem. Sapiente, veritatis consectetur nulla dolore, ea, minima iure facilis quo perferendis quis quam
            praesentium excepturi?

        </div>
    </div>

    <div class="despedida">
        <div class="texto">
            ATENTAMENTE
        </div>
        <div class="imagen"></div>
        <hr class="firma">
        <div class="remitente">LIC. NORMA UTRILLA LOPEZ</div>
        <div class="cargo">ENCARGADA DE EGRESOS</div>
        <div class="copias">C.p.p RodolFo Yañez Medina</div>
        <div class="iniciales">RYM/JJNA</div>
    </div>
</body>

</html>
