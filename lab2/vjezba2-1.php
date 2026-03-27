<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>PHP Vjezba</title>
		<style>
			:root {
				--bg: oklch(20.8% 0.042 265.755);
				--card: oklch(98.4% 0.003 247.858);
				--text: oklch(14.7% 0.004 49.25);
				--muted: oklch(37.4% 0.01 67.558);
				--accent: oklch(42.4% 0.199 265.638);
			}

			* {
				margin: 0;
				padding: 0;
        box-sizing: border-box;
			}

			body {
				font-family:
					system-ui,
					-apple-system,
					"Segoe UI",
					Roboto,
					sans-serif;
				font-size: 16px;
				line-height: 1.6;
        background-color: var(--bg);
        color: white;
			}

			h1 {
				font-size: 2rem;
        margin-top: 0;
        margin-bottom: 12px;
			}

      p {
        margin-bottom: 12px;
      }

      footer {
        font-size: .9rem;
        color: var(--muted);
      }

      .card {
        background-color: var(--card);
        color: var(--text);
      }

      .wrap {
        max-width: 720px;
        margin: 48px auto;
        background: var(--card);
        padding: 32px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
      }

      .btn {
        display: inline-block;
        padding: 10px 16px;
        border: 1px solid var(--accent);
        border-radius: 10px;
        text-decoration: none;
      }

      .btn:hover {
        background: var(--accent); 
        color: #fff;
      }

      .btn:focus-visible {
        outline: 3px solid var(--accent);
      }

      .btn:active {
        opacity: 0.9;
      }

      a {
        text-decoration: none;
        color: var(--text);
      }

      a:hover {
        text-decoration: underline;
      }
		</style>
	</head>
	<body>
    <div class="wrap">

      <div class="card">
        <?php 
      $naslov = "PHP Vjezba 2-1"; 
      $autor = "Jakov Robić"; 
      echo "
			<h1>$naslov</h1>
			"; 
      echo "<p>Ovu stranicu izradio je <strong>$autor</strong>.</p>"; 
      echo '<a href="https://github.com/jacob6707" target="_blank" class="btn">
      Moj GitHub page
      </a>'; 
      ?>
		</div>
  </div>
	</body>
</html>

<!-- Naziv datoteke: vjezba2-1.php -->
