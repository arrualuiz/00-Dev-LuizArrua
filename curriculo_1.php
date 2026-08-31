<?php
// versao PHP - curriculo publico
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Luiz Arrua - Integrações, APIs & Automação</title>
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
        <p class="page-subtitle">Programador • Integração de Sistemas & APIs • Automação • Dados</p>
        <p class="page-subtitle"><a href="https://www.linkedin.com/in/luizarrua/" target="_blank" rel="noreferrer">linkedin.com/in/luizarrua</a></p>
      </div>
      <div class="hero-actions">
        <a class="btn" href="mailto:luizarrua16@gmail.com">luizarrua16@gmail.com</a>
        <a class="btn btn-ghost" href="tel:+5541991415164">(41) 99141-5164</a>
      </div>
    </header>

    <!-- COMO POSSO AJUDAR -->
    <section class="panel help-panel">
      <h2>Como posso ajudar</h2>
      <p class="muted">Eu desenvolvo soluções que conectam sistemas, automatizam processos e transformam necessidades de negócio em soluções técnicas.</p>

      <div class="help-grid">
        <div class="help-item">
          <span class="help-icon">🔗</span>
          <h3>Integração de Sistemas</h3>
          <p class="muted">APIs REST • Webhooks • JSON • Postman</p>
        </div>
        <div class="help-item">
          <span class="help-icon">⚙️</span>
          <h3>Automação</h3>
          <p class="muted">Python • lógica de programação • automação de processos</p>
        </div>
        <div class="help-item">
          <span class="help-icon">📊</span>
          <h3>Dados</h3>
          <p class="muted">SQL • Power BI • tratamento e análise de dados</p>
        </div>
        <div class="help-item">
          <span class="help-icon">🛠</span>
          <h3>Troubleshooting</h3>
          <p class="muted">Análise de logs • diagnóstico de falhas • causa raiz</p>
        </div>
        <div class="help-item">
          <span class="help-icon">🤝</span>
          <h3>Técnico + Cliente</h3>
          <p class="muted">Levantamento de requisitos • suporte • stakeholders</p>
        </div>
      </div>
    </section>

    <!-- COMPETÊNCIAS POR NÍVEL -->
    <section class="panel">
      <h2>Competências</h2>

      <h3 class="panel-sub">Uso profissional</h3>
      <div class="chips">
        <span class="chip">APIs REST</span>
        <span class="chip">Webhooks</span>
        <span class="chip">JSON</span>
        <span class="chip">Postman</span>
        <span class="chip">Lógica de programação</span>
        <span class="chip">Análise de logs</span>
        <span class="chip">JavaScript</span>
      </div>

      <h3 class="panel-sub">Já utilizei</h3>
      <div class="chips">
        <span class="chip">Python</span>
        <span class="chip">SQL / MySQL</span>
        <span class="chip">Power BI</span>
        <span class="chip">Excel avançado</span>
        <span class="chip">HTML / CSS</span>
        <span class="chip">Vue.js</span>
        <span class="chip">Kotlin</span>
        <span class="chip">Google Apps Script</span>
        <span class="chip">Looker Studio</span>
        <span class="chip">Windows</span>
        <span class="chip">Linux</span>
      </div>

      <h3 class="panel-sub">Estudando atualmente</h3>
      <div class="chips">
        <span class="chip">Estatística e Ciência de Dados</span>
        <span class="chip">Análise e Desenvolvimento de Sistemas</span>
        <span class="chip">Java (back-end)</span>
        <span class="chip">TypeScript</span>
      </div>
    </section>

    <section class="resume-grid">
      <article class="panel">
        <h2>Informações de contato</h2>
        <div class="kv">
          <div class="kv-row"><span>Complete Name</span><b>Luiz Felipe Arrua Castilho</b></div>
          <div class="kv-row"><span>Email</span><b>luizarrua16@gmail.com</b></div>
          <div class="kv-row"><span>Fone</span><b>41 99141-5164</b></div>
          <div class="kv-row"><span>Localização</span><b>Curitiba • Paraná • Brasil</b></div>
        </div>

        <h3 class="panel-sub">Idiomas</h3>
        <div class="chips">
          <span class="chip">Português (nativo)</span>
          <span class="chip">Inglês (intermediário)</span>
          <span class="chip">Espanhol (intermediário)</span>
        </div>
      </article>

      <article class="panel">
        <h2>Experiência</h2>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>Zenvia</h3>
              <p class="muted">Programador Pleno • CLT</p>
            </div>
            <div class="job-dates">fev/2026 • atual</div>
          </div>

          <p class="muted">Desenvolvimento de soluções conversacionais e integrações via APIs REST e Webhooks, com foco em chatbots, automação de fluxos e consumo de sistemas externos.</p>

          <h4>Principais atividades</h4>
          <ul class="clean-list">
            <li>Configuração, estruturação e publicação de fluxos de chatbot em ambiente de produção.</li>
            <li>Integrações com sistemas externos via API REST, tratamento de dados em JSON e testes/validação com Postman.</li>
            <li>Investigação de falhas e análise de logs para identificar causas de inconsistências em integrações.</li>
            <li>Validação do comportamento das integrações em homologação junto a stakeholders.</li>
            <li>Apoio a clientes no onboarding técnico, ajustes e evolução contínua das soluções entregues.</li>
          </ul>
        </div>

        <div class="job">
          <div class="job-head">
            <div>
              <h3>VorpTech</h3>
              <p class="muted">Líder de suporte técnico • CLT</p>
            </div>
            <div class="job-dates">fev/2023 • fev/2026</div>
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
            <div class="job-dates">out/2018 • jul/2022</div>
          </div>

          <p class="muted">Atuação em Suporte N1 e evolução para posições de atendimento crítico e níveis mais avançados, incluindo Móvel Crítico, Cluster e Vivo V (N3).</p>
        </div>
      </article>

      <article class="panel">
        <h2>Formação acadêmica</h2>

        <div class="edu">
          <h3>Estatística e Ciência de Dados — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2029 • Noturno</p>
        </div>

        <div class="edu">
          <h3>Análise e Desenvolvimento de Software — Pontifícia Universidade Católica do Paraná (PUCPR)</h3>
          <p class="muted">Ensino Superior • Cursando (2º ano) • Conclusão prevista: 07/2027 • Noturno</p>
        </div>

        <div class="edu">
          <h3>Gestão da Informação — Universidade Federal do Paraná (UFPR)</h3>
          <p class="muted">Ensino Superior • Interrompido • 03/2022 • Matutino</p>
        </div>
      </article>

      <article class="panel">
        <h2>Atalhos pra processo seletivo</h2>
        <p class="muted">Dica: usa o botão <b>Copiar tudo</b> lá em cima e cola no formulário. Se o site pedir campo por campo, usa <b>Copiar contato</b> e vai preenchendo mais rápido.</p>

        <div class="chips">
          <span class="chip">Curitiba/PR</span>
          <span class="chip">Remoto ou híbrido</span>
          <span class="chip">Integrações • APIs</span>
          <span class="chip">Automação • Dados</span>
        </div>
      </article>

      <article class="panel">
        <h2>Projetos</h2>
        <ul class="clean-list">
          <li><b>PUCPR Machine Learning</b> — exploração de dados, seleção de atributos e treinamento de modelos de ML. <span class="muted">(Python, Scikit-Learn, Pandas)</span></li>
          <li><b>Desafio QuiteJá</b> — aplicação frontend dinâmica com foco em usabilidade e performance. <span class="muted">(Vue.js, JavaScript, CSS3)</span></li>
          <li><b>Android Notification Reader</b> — leitor de notificações Android. <span class="muted">(Kotlin)</span></li>
          <li><b>Finance Automation / Open Finance API</b> — automações e integrações relacionadas a finanças pessoais. <span class="muted">(JavaScript)</span></li>
        </ul>
        <p class="muted"><a href="https://github.com/arrualuiz" target="_blank" rel="noreferrer">github.com/arrualuiz →</a></p>
      </article>
    </section>

    <p class="signature page-signature">Desenvolvido por <span class="signature-name">Arrua</span> 🚀</p>
  </main>

  <script src="script.js"></script>
</body>
</html>
