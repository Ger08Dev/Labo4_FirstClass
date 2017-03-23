import { GerPage } from './app.po';

describe('ger App', function() {
  let page: GerPage;

  beforeEach(() => {
    page = new GerPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
