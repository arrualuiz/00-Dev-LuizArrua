<?php
// versao PHP - curriculo publico
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Luiz Arrua - Currículo</title>
  <link rel="icon" type="image/png" href="la.png">
  <link rel="stylesheet" href="style.css" />
</head>
<body class="page">
  <nav class="top-nav" aria-label="Navegação">
    <div class="nav-left">
      <a class="nav-brand" href="index.php">Arrua</a>
      <a class="nav-link" href="index.php">Dashboard</a>
    </div>
    <div class="nav-right">
      <button id="copy-contact" class="btn btn-ghost" type="button">Copiar contato</button>
      <button id="copy-all" class="btn btn-ghost" type="button">Copiar tudo</button>
    </div>
  </nav>

  <main class="page-container">
    <header class="page-hero">
      <div>
        <h1 class="page-title">Luiz Felipe Arrua Castilho</h1>
        <p class="page-subtitle">Líder de suporte técnico • Helpdesk N1/N2 • Automação (Python/SQL/Power BI)</p>
        <p class="page-subtitle"><a href="https://www.linkedin.com/in/luizarrua/" target="_blank" rel="noreferrer">linkedin.com/in/luizarrua</a></p>
      </div>
      <div class="hero-actions">
        <a class="btn" href="mailto:luizarrua16@gmail.com">luizarrua16@gmail.com</a>
        <a class="btn btn-ghost" href="tel:+5541991415164">(41) 99141-5164</a>
      </div>
    </header>

    <section class="resume-grid">
      <article class="panel">
        <h2>Informações de contato</h2>
        <div class="kv">
          <div class="kv-row"><span>Complete Name</span><b>Luiz Felipe Arrua Castilho</b></div>
          <div class="kv-row"><span>First Name</span><b>Luiz Felipe</b></div>
          <div class="kv-row"><span>Last Name</span><b>Arrua Castilho</b></div>
          <div class="kv-row"><span>Email</span><b>luizarrua16@gmail.com</b></div>
          <div class="kv-row"><span>Fone</span><b>41 99141-5164</b></div>
        </div>

        <h3 class="panel-sub">Endereço</h3>
        <div class="kv">
          <div class="kv-row"><span>Rua</span><b>Rua Professora Júlia Valery Legat Neal</b></div>
          <div class="kv-row"><span>Complemento</span><b>Casa</b></div>
          <div class="kv-row"><span>Bairro</span><b>Xaxim</b></div>
          <div class="kv-row"><span>Cidade/Estado</span><b>Curitiba • Paraná</b></div>
          <div class="kv-row"><span>País</span><b>Brasil</b></div>
          <div class="kv-row"><span>CEP</span><b>81810-590</b></div>
        </div>
      </article>

      <article class="panel">
        <h2>Empregos anteriores</h2>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>VorpTech</h3>
              <p class="muted">Líder de suporte técnico • CLT</p>
            </div>
            <div class="job-dates">14/02/2023 • atual</div>
          </div>

          <p class="muted">Responsável técnico pela área de Suporte/Helpdesk, liderança de equipe, atendimento corporativo e estabilidade dos ambientes de TI.</p>

          <h4>Principais atividades</h4>
          <ul class="clean-list">
            <li><b>Liderança & Gestão:</b> supervisão de estagiários/equipe, distribuição e priorização de demandas, suporte VIP, visitas presenciais recorrentes em cliente (CBRE).</li>
            <li><b>Atendimento Técnico:</b> chamados N1/N2 (remoto e presencial), setup para novos clientes, incidentes críticos/urgentes, padronização de procedimentos.</li>
            <li><b>Inventário, Licenças e Automação:</b> inventário (Milvus, Trend Micro, RMM Ninja), auditoria de licenças, automações com Python + SQL + Power BI.</li>
            <li><b>Backup e Monitoramento:</b> Acronis, monitoramento diário, causa raiz, ações preventivas/corretivas.</li>
            <li><b>Documentação:</b> POPs, materiais de apoio, rotinas e boas práticas, documentação detalhada de soluções.</li>
          </ul>

          <h4>Resultados e entregas</h4>
          <ul class="clean-list">
            <li>Aumento da precisão do inventário com automações de dados.</li>
            <li>Redução significativa de falhas recorrentes em backup.</li>
            <li>Padronização e organização de procedimentos internos.</li>
            <li>Melhoria na velocidade de atendimento técnico.</li>
          </ul>
        </div>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>Telefónica (Vivo)</h3>
              <p class="muted">Atendimento ao cliente • CLT</p>
            </div>
            <div class="job-dates">01/10/2018 • 01/07/2022</div>
          </div>

          <p class="muted">Atuação em Suporte N1 e evolução para posições de atendimento crítico e níveis mais avançados.</p>
          <ul class="clean-list">
            <li>Suporte N1</li>
            <li>Móvel Crítico</li>
            <li>Programa Anjos (6 meses em contato com suporte ao operador durante atendimento)</li>
            <li>Móvel Top</li>
            <li>Cluster (Móvel e Fixo / Vendas)</li>
            <li>Vivo V Atendente N3</li>
            <li>Consultor N1 WhatsApp Vivo V</li>
          </ul>
        </div>
      </article>

      <article class="panel">
        <h2>Formação acadêmica</h2>

        <div class="edu">
          <h3>Gestão da Informação — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Interrompido • Conclusão: 03/2022 • Matutino</p>
        </div>

        <div class="edu">
          <h3>Análise e Desenvolvimento de Software — Pontifícia Universidade Católica do Paraná (PUCPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2027 • Noturno</p>
        </div>

        <div class="edu">
          <h3>Estatística e Ciência de Dados — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2029 • Noturno</p>
        </div>
      </article>

      <article class="panel">
        <h2>Atalhos pra processo seletivo</h2>
        <p class="muted">Dica: usa o botão <b>Copiar tudo</b> lá em cima e cola no formulário. Se o site pedir campo por campo, usa <b>Copiar contato</b> e vai preenchendo mais rápido.</p>

        <div class="chips">
          <span class="chip">Curitiba/PR</span>
          <span class="chip">CLT</span>
          <span class="chip">Suporte • Helpdesk</span>
          <span class="chip">Python • SQL • Power BI</span>
        </div>
      </article>
    </section>

    <p class="signature page-signature">Desenvolvido por <span class="signature-name">Arrua</span> 🚀</p>
  </main>

  <script src="script.js"></script>
</body>
</html>
