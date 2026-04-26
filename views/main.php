<div class="grid w-full h-screen overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_20px_45px_-28px_rgba(17,21,27,0.24)] lg:grid-cols-[82px_1fr]">
	<?php include 'views/layout/sidebar.php'; ?>

	<main class="bg-white/90 p-4 md:p-6 w-full h-full flex flex-col overflow-hidden">
		<?php include 'views/layout/header.php'; ?>

		<div class="w-full h-full overflow-hidden flex flex-col">
			<section class="mb-3.5 rounded-[20px] border border-slate-200 bg-white px-5 py-4">
				<div class="grid items-center gap-5 md:grid-cols-[180px_1fr]">
					<div>
						<p class="m-0 text-sm text-slate-500">learners on the platform</p>
						<p class="m-0 mt-1 text-[5rem] font-semibold leading-[0.95] tracking-[-2px] md:text-[5rem] text-[3.7rem]">98</p>
					</div>
	
					<div>
						<p class="mb-2.5 mt-0 text-sm font-medium text-slate-500"><span class="font-extrabold text-emerald-600">20%</span> closer to your goal</p>
						<div class="h-[50px] overflow-hidden rounded-[15px] border border-slate-200 bg-slate-100">
							<div class="h-full w-[64%] rounded-[15px] bg-gradient-to-r from-[#ff9b9b] via-[#f0cf72] to-[#77de8e] shadow-[0_0_26px_rgba(119,222,142,0.36)]"></div>
						</div>
					</div>
				</div>
			</section>
	
			<section class="mb-3.5 grid rounded-[20px] border border-slate-200 bg-white md:grid-cols-3">
				<article class="border-b border-slate-200 px-5 py-4 md:border-b-0 md:border-r">
					<p class="m-0 text-[0.86rem] text-slate-500">Active instructors</p>
					<div class="mt-2 text-[2.15rem] font-bold tracking-[-1px]">12,639</div>
					<p class="m-0 mt-1 text-sm font-semibold text-rose-500">12% from last month</p>
				</article>
	
				<article class="border-b border-slate-200 px-5 py-4 md:border-b-0 md:border-r">
					<p class="m-0 text-[0.86rem] text-slate-500">Active learners</p>
					<div class="mt-2 text-[2.15rem] font-bold tracking-[-1px]">12,639</div>
					<p class="m-0 mt-1 text-sm font-semibold text-rose-500">12% from last month</p>
				</article>
	
				<article class="px-5 py-4">
					<p class="m-0 text-[0.86rem] text-slate-500">Course completion rate</p>
					<div class="mt-2 text-[2.15rem] font-bold tracking-[-1px]">65%</div>
					<p class="m-0 mt-1 text-sm font-semibold text-emerald-600">8% from last month</p>
				</article>
			</section>
	
			<section class="rounded-[20px] border border-slate-200 bg-white px-4 py-4 md:px-5 w-full flex-1">
				<div class="mb-3 flex flex-wrap items-baseline justify-between gap-3">
					<h2 class="m-0 text-[1.38rem] font-semibold">Top learners</h2>
					<span class="text-sm text-slate-500">125K total, review their progress</span>
				</div>

				<div class="dashboard-scroll grid h-[400px] gap-2.5 overflow-y-auto px-1 md:h-[480px]">
					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=15" alt="Ahmad Curtis">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Ahmad Curtis</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 12 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Beginner</span>
						<span class="font-semibold text-slate-600">June 21</span>
						<span class="font-semibold text-slate-600">59%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=32" alt="Emma Smith">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Emma Smith</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Expert</span>
						<span class="font-semibold text-slate-600">June 1</span>
						<span class="font-semibold text-slate-600">35%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=45" alt="William Hall">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">William Hall</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 7 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Intermediate</span>
						<span class="font-semibold text-slate-600">May 16</span>
						<span class="font-semibold text-slate-600">88%</span>
					</article>

					<article class="grid items-center gap-2 border-t border-dashed border-slate-200 pt-2.5 md:grid-cols-[1.8fr_0.8fr_0.8fr_0.6fr]">
						<div class="flex items-center gap-3">
							<img class="h-[42px] w-[42px] rounded-[11px] object-cover" src="https://i.pravatar.cc/64?img=5" alt="Liam Lee">
							<div>
								<h3 class="m-0 text-[0.98rem] font-semibold">Liam Lee</h3>
								<p class="m-0 mt-0.5 text-[0.84rem] text-slate-500">Learning streak: 4 days</p>
							</div>
						</div>
						<span class="inline-block w-fit rounded-full bg-slate-100 px-3 py-1.5 text-[0.82rem] font-semibold text-slate-600">Beginner</span>
						<span class="font-semibold text-slate-600">May 2</span>
						<span class="font-semibold text-slate-600">23%</span>
					</article>
				</div>
			</section>

		</div>


			<!-- <aside class="rounded-[20px] border border-slate-200 bg-white px-4 py-4 md:px-5">
				<div class="mb-3 flex items-baseline justify-between gap-3">
					<h2 class="m-0 text-[1.38rem] font-semibold">Learner trends</h2>
					<button class="rounded-full border border-slate-200 bg-slate-50 px-3.5 py-2 text-sm">Filter</button>
				</div>

				<div class="relative mt-1 min-h-[330px] w-full md:min-h-[370px]" aria-label="Learner trend values">
					<div class="absolute left-1/2 top-[18px] grid h-[108px] w-[120px] -translate-x-1/2 place-content-center rounded-[50%_50%_45%_45%] bg-emerald-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">87%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Engagement</span>
					</div>
					<div class="absolute right-[38px] top-[95px] grid h-[108px] w-[120px] place-content-center rounded-[50%_50%_45%_45%] bg-green-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">89%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Consistency</span>
					</div>
					<div class="absolute right-[62px] top-[212px] grid h-[108px] w-[120px] place-content-center rounded-[50%_50%_45%_45%] bg-orange-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">38%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Motivation</span>
					</div>
					<div class="absolute left-1/2 top-[240px] grid h-[108px] w-[120px] -translate-x-1/2 place-content-center rounded-[50%_50%_45%_45%] bg-amber-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">21%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Completion rate</span>
					</div>
					<div class="absolute left-[62px] top-[212px] grid h-[108px] w-[120px] place-content-center rounded-[50%_50%_45%_45%] bg-orange-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">39%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Retention</span>
					</div>
					<div class="absolute left-[38px] top-[95px] grid h-[108px] w-[120px] place-content-center rounded-[50%_50%_45%_45%] bg-green-200/30 p-2 text-center shadow-[0_10px_20px_-17px_rgba(11,16,23,0.35)] backdrop-blur-[2px] md:h-[130px] md:w-[148px]">
						<strong class="block text-base md:text-[1.35rem]">90%</strong><span class="text-[0.74rem] text-slate-600 md:text-[0.83rem]">Focus time</span>
					</div>
					<div class="absolute left-1/2 top-[54%] grid h-[54px] w-[54px] -translate-x-1/2 -translate-y-1/2 place-items-center rounded-full bg-gradient-to-br from-[#fb9c77] to-[#f1b66d] text-[1.8rem] text-white shadow-[0_14px_26px_-15px_rgba(230,130,91,0.82)]">+</div>
				</div>
			</aside> -->
		</section>
	</main>
</div>
