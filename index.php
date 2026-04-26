

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning Dashboard</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						sans: ['Plus Jakarta Sans', 'Segoe UI', 'sans-serif']
					}
				}
			}
		};
	</script>
	<style>
		.dashboard-scroll {
			scrollbar-width: thin;
			scrollbar-color: #94a3b8 #e2e8f0;
		}

		.dashboard-scroll::-webkit-scrollbar {
			width: 10px;
		}

		.dashboard-scroll::-webkit-scrollbar-track {
			background: #e2e8f0;
			border-radius: 9999px;
		}

		.dashboard-scroll::-webkit-scrollbar-thumb {
			background: linear-gradient(180deg, #94a3b8 0%, #64748b 100%);
			border-radius: 9999px;
			border: 2px solid #e2e8f0;
		}

		.dashboard-scroll::-webkit-scrollbar-thumb:hover {
			background: linear-gradient(180deg, #64748b 0%, #475569 100%);
		}
	</style>
</head>
<body class="m-0 bg-slate-100 text-slate-900 antialiased [background:radial-gradient(circle_at_92%_8%,rgba(103,199,130,0.16),transparent_22%),radial-gradient(circle_at_8%_95%,rgba(244,156,94,0.12),transparent_22%),#f4f6f7]">
    <?php include 'views/main.php'; ?>
</body>
</html>
